<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;         //Fir handling http request
use Illuminate\Support\Facades\Hash; //For hashing password
use Illuminate\Support\Facades\App; 
use App\User;                        //The user model
use App\Blog;                        //The user model
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
     public function showPublicProfile(Request $request)
        {
            auth()->check();
            $user = User::find($request->session()->get('user_id'));

            if (!$user) {
                return redirect()->back()->with('error', 'Session expired.');
            }
            
            $blogs = Blog::where('created_by', $user->id)->where('status', 'published')->get();
            $clickedUser = null;

            $locale = App::getLocale();          
            if ($locale === 'en') {
                return view('sections.published_blogs', compact('blogs', 'user', 'clickedUser')); 
            }else
            {
                //dd("ar");
                return view('sections.published_blogs_ar', compact('blogs', 'user', 'clickedUser'));    
            }
        }

        public function adminProfile(Request $request)
        {
            auth()->check();
            $user = User::find($request->session()->get('user_id'));

            if (!$user) {
                return redirect()->back()->with('error', 'Session expired.');
            }
            
            $blogs = Blog::where('created_by', $user->id)->where('status', 'published')->get();

            $locale = App::getLocale();          
            if ($locale === 'en') {
                return view('admin.profile-super_admin', compact('blogs', 'user')); 
            }else
            {
                //dd("ar");
                return view('admin_ar.profile-super_admin', compact('blogs', 'user'));    
            }
        }

        public function editProfile(Request $request)
        {
        
            $user = User::find($request->session()->get('user_id'));
            $locale = App::getLocale(); 

            if ($locale === 'en') {
                return view('sections.edit-profile', compact('user')); 
            }else
            {
                //dd("ar");
                return view('sections.edit-profile_ar', compact('user'));    
            }
        }

        public function updateProfile(Request $request)
        {
            // dd($request);
            $user = User::find($request->session()->get('user_id'));
            $data = $request->validate([
                'name' => 'nullable|string',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ],[
                'photo.mimes' => 'Photo must be of type: jpg, png, jpeg, gif.',
                'photo.max' => 'Photo must not be larger than 2MB.',
            ]);

            

            if($request->hasFile('photo'))
            {
                //delete the old image if it exists
                if ($user->photo && file_exists(public_path('images/' . $user->photo))) {
                    unlink(public_path('images/' . $user->photo));
                }

               $photoName = time() . '.' . $request->file('photo')->getClientOriginalExtension();
               $request->file('photo')->move(public_path('images'), $photoName);
               $data['photo'] = $photoName;
            }
            
            $user->update($data);
            if($user->type == 'super_admin')
            {
                return redirect()->route('localized.admin.profile', ['lang' => app()->getLocale()])->with('success', 'Profile updated successfully.');
            }else
            {
                return redirect()->route('localized.profile', ['lang' => app()->getLocale()])->with('success', 'Profile updated successfully.');
            }
        }

        public function userProfile($lang, $id)
        {
            // Set locale based on URL parameter
            app()->setLocale($lang);
            
            // Find the user or return 404
            $clickedUser = \App\User::findOrFail($id);
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
                return view('sections.published_blogs_ar', compact('clickedUser', 'blogs', 'latestBlogs'));
            }else{
                // Return the view with user and their blogs
                return view('sections.published_blogs', compact('clickedUser', 'blogs', 'latestBlogs'));
            }
        }
}
