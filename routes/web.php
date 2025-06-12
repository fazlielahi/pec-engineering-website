<?php

use Illuminate\Support\Facades\Route;

// Manually import controller classes for Laravel 7 (adjust namespaces if needed)
use App\Http\Controllers\ContactController;

// 1) Root — redirect "/" to the current locale's home
    Route::get('/', 'RootRedirectController@redirect')->name('root.redirect');

// 2) Language switcher (no locale prefix here)
Route::get('/switch-language/{lang}', 'LanguageController@switch')
     ->name('lang.switch');

// 3) All localized routes
Route::group([
    'prefix' => '{lang}',
    'where' => ['lang' => 'en|ar'],
    'middleware' => ['web', 'App\Http\Middleware\SetLocale'],
    'as'         => 'localized.', 
], function () {
    // Home
    Route::get('/', 'SiteController@language' )->name('welcome');

    // Contact
    Route::get('/contact', 'ContactController@index')->name('contact');

    // Blog
    Route::get('/blog', 'BlogController@blog')->name('blog');

    Route::post('/blog/{blog}/comments', 'BlogController@comment')->name('blog.comment');
    Route::post('/blog/{blog}/like', 'BlogController@like')->name('blog.like');
    Route::get('/blog-details/{blog}', 'BlogController@blogDetails')->name('blog-details');

    //Register form
    Route::get('/register', 'UserController@showRegisterForm')->name('register');

    //to handle registration form submission
    Route::post('/register', 'UserController@register');

    //Show Login Form
    Route::get('/login', 'UserController@showLoginForm')->name('login');

    //Handle login form submission
    Route::post('/login', 'UserController@login');

    // logout ends user session

    Route::get('/logout', 'UserController@logout')->name('logout');

    //profile routes

    Route::get('/profile/published-blogs', 'ProfileController@showPublicProfile')->name('profile');
    Route::get('/profile/edit', 'ProfileController@editProfile')->name('profile-edit');
    Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile-update');
    Route::get('/profile/request-blogs', 'Admin\BlogController@requestBlogs')->name('profile-request-blogs');
    Route::get('/profile/draft-blogs', 'Admin\BlogController@draftBlogs')->name('profile-draft-blogs');
    Route::get('/profile/rejected-blogs', 'BlogController@rejectedBlogs')->name('profile-rejected-blogs');
    Route::get('/create-blog', 'Admin\BlogController@create')->name('blog-create'); 

    // show blogs of user whose profile is cliked
    Route::get('user-blogs/{id}', 'BlogController@userBlogs')->name('user-blogs');
    Route::get('user-profile/{id}', 'ProfileController@userProfile')->name('user-profile');

    // blog routes
    Route::get('/blogs', 'BlogController@blog');

    // Services
    Route::get('/service-details', 'ServiceController@serviceDetails')->name('service-details');
    Route::get('/green-engineering', 'ServiceController@greenEngineering')->name('green-engineering');
    Route::get('/bms', 'ServiceController@bms')->name('bms');
    Route::get('/risk-management', 'ServiceController@riskManagement')->name('risk-management');
    Route::get('/aor', 'ServiceController@aor')->name('aor');
    Route::get('/pmo', 'ServiceController@pmo')->name('pmo');
    Route::get('/mechnical-design', 'ServiceController@mechnicalDesign')->name('mechnical-design');
    Route::get('/structual-design', 'ServiceController@structualDesign')->name('structual-design');
    Route::get('/electrical-design', 'ServiceController@electricalDesign')->name('electrical-design');
    Route::get('/engineering-management', 'ServiceController@engineeringManagement')->name('engineering-management');
    Route::get('/engineering-supervision', 'ServiceController@engineeringSupervision')->name('engineering-supervision');
    Route::get('/arch-design', 'ServiceController@archDesign')->name('arch-design');
    Route::get('/interior-design', 'ServiceController@interiorDesign')->name('interior-design');
   // Admin protected routes
    Route::group([
        'prefix' => 'admin',
        'middleware' => ['web', 'App\Http\Middleware\SetLocale'],
    ], function () {

        //DASHBOARD only accessable after login
        Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard'); 
        
        //Blog
        Route::get('/blog', 'Admin\BlogController@showBlog')->name('admin.blog'); 
        Route::get('/blog/request', 'Admin\BlogController@requestBlogs')->name('admin.request-blogs'); 
        //Create Blog
        Route::get('/create', 'Admin\BlogController@create')->name('admin.blog-create'); 
        Route::post('/blog', 'Admin\BlogController@store')->name('admin.blog.store')    ; 
        Route::get('/blog/{blog}/edit', 'Admin\BlogController@editBlog')->name('admin.blog.edit'); 
        Route::put('/blog/{id}', 'Admin\BlogController@update')->name('admin.blog.update'); 
        Route::delete('/blog/{id}', 'Admin\BlogController@delete')->name('admin.blog.destroy'); 
        //ck editor file uplaod
        Route::post('ckeditor/upload/', 'Admin\CKEditorController@uploadImage')->name('admin.ckeditor.upload');

        //approve blog
        Route::post('/blog/{blog}/approve', 'Admin\BlogController@approveBlog')->name('admin.blog.approve');
        //reject blog
        Route::post('/blog/{blog}/reject', 'Admin\BlogController@rejectBlog')->name('admin.blog.reject');

        //profile
        Route::get('/profile', 'ProfileController@adminProfile')->name('admin.profile');
    
    });
    

});

 


Auth::routes();


