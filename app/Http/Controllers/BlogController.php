<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str; //to use its static method str::random() without typing the full namespace eachtime
use App\Blog;
use App\User;
use App\Comment;
use App\Likes;
use Illuminate\Http\JsonResponse;


class BlogController extends Controller
{
    public function blog(Request $request){

        $blogs = Blog::where('status', 'published')->get();
        // dd($blogs);
        
        // Get current locale
        $locale = App::getLocale();
                         
        // Return different views based on locale
        if ($locale === 'ar') {
         return view('sections.blog_ar', compact('blogs'));
        }else{
         return view('sections.blog', compact('blogs'));
        }
    }

    public function rejectedBlogs(Request $request)
    {
        // Check if the user is logged in: either session or cookie has 'user_id'
        if (!$request->session()->has('user_id') && !$request->cookie('user_id')) {
            return redirect()->route('localized.login', ['lang' => app()->getLocale()]);
        }

        auth()->check();
        $user = User::find($request->session()->get('user_id'));

        $blogs = Blog::all()->where('status', 'rejected');     
        // dd($blogs);
        // Get current locale
        $locale = App::getLocale();
                         
        // Return different views based on locale
        if ($locale === 'ar') {
         return view('sections.rejected_blogs_ar', compact('blogs', 'user'));
        }else{
         return view('sections.rejected_blogs', compact('blogs', 'user'));
        }
    }

    public function blogDetails($locale, $id)
    {
        $blog = Blog::findOrFail($id);
        $popular_blogs = Blog::where('id', '!=', $id)->where('status', 'published')->latest()->take(10)->get();
         if ($locale === 'ar') {
            return view('sections.blog-details', compact('blog', 'popular_blogs'));
         }else{
            return view('sections.blog-details_en', compact('blog', 'popular_blogs'));
         }
    }

    //comment on blog post
    public function comment(Request $request, $locale, Blog $blog)
    {
        // dd($request);

        $request->validate([
            'comment' => 'required',
            'name' => 'nullable'
        ]);

        //get or create a visiter token
        $token = $request->cookie('visiter_token');

        if(!$token)
        {
            $token = str::random(60); //generate a random string of 60-chtr
            //store in cookie for one year 60min*24*hrs*365days
            cookie::queue('visiter_token', $token, 60*24*365);
        }
        // dd($token);

        //check if the user is logged in
        if($request->session()->has('user_id') || $request->cookie('user_id'))
        {
            $userId = $request->session()->get('user_id') ?? $request->cookie('user_id');
            $user = User::find($userId);
           
            $name = $user->name;
            $user_id = $user->id;

             // Save the comment with authenticated user info
             Comment::create([
                    'name' => $name,
                    'blog_id' => $blog->id,
                    'comment' => $request->comment,
                    'user_id' => $user_id,
                    'visiter_token' => $token, 
                ]);

        }else{


        //if a comment already exists with the same name re use the name
        $existingComment = Comment::where('visiter_token', $token)->first();
        $name = $existingComment ? $existingComment->name : $request->name;

        //save the comment
        Comment::create([
            'name' => $name,
            'blog_id' => $blog->id,
            'comment' => $request->comment,
            'visiter_token' => $token,
        ]);
    }

        return redirect()->back();
    }

    // likes handle
    public function like(Request $request, $locale, Blog $blog)
    {
        $token = $request->cookie('visiter_token');

        if(!$token)
        {
            $token = Str::random(60);
            cookie::queue('visiter_token', $token, 60*24*365);
        }

        // check for existing like for this visitor
        $existingLike = Likes::where('blog_id', $blog->id)
            ->where('visiter_token', $token)
            ->exists();

        if(!$existingLike){
            Likes::create([
                'visiter_token' => $token,
                'blog_id' => $blog->id,
            ]);
        }

        if($request->ajax()){
            // Refresh the blog instance to get the updated count
            $blog->refresh();
            return new JsonResponse([
                'count' => $blog->likes()->count()
            ]);
        }
        return redirect()->back();
    }

 public function userBlogs($lang, $id)
{
    // Set locale based on URL parameter
    app()->setLocale($lang);
    
    // Find the user or return 404
    $user = \App\User::findOrFail($id);
    // info($lang);
    // Get all blogs by this user, ordered by newest first
    $blogs = \App\Blog::where('created_by', $id)
                    ->where('status', 'published')
                    ->orderBy('created_at', 'desc')
                    ->get();

    $latestBlogs = \App\Blog::where('created_by', $id)
    ->where('status', 'published')
    ->orderBy('created_at', 'desc')
    ->take(10)
    ->get(); // For latest 10
    
    if ($lang === 'ar') {
        // Return the view with user and their blogs
        return view('sections.user_blogs_ar', compact('user', 'blogs', 'latestBlogs'));
    }else{
        // Return the view with user and their blogs
        return view('sections.user_blogs', compact('user', 'blogs', 'latestBlogs'));
    }
}
   
}
