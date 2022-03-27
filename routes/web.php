<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


/********************************************************************************************************************
 *                                                  Public Routes
 ********************************************************************************************************************/

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix'=>'public'], function (){
    
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('about', 'AboutController@about')->name('about');

    Route::group(['prefix'=>'engineers'], function (){
        
        Route::get('msc','EngineersController@msc')->name('msc');
        Route::get('bsc','EngineersController@bsc')->name('bsc');
        Route::get('bsc-dipolma','EngineersController@diplomabsc')->name('diplomabsc');
        Route::get('diploma','EngineersController@diploma')->name('diploma');

        Route::get('user','EngineersController@publicuserprofile')->name('user');
        
    });

    Route::group(['prefix'=>'info'], function (){
    
    Route::get('convening-member','InfoController@convening_member')->name('convening-member');
    Route::get('developer','InfoController@developer')->name('developer');
    
    });

    
    Route::get('gallery', 'GalleryController@gallery')->name('gallery');
        
    /*---------------------------------Blog--------------------------------- */
    Route::get('blog','BlogController@blog')->name('blog');
    Route::get('post/detailes/{id}','BlogController@detailes')->name('post.detailes');


    /*---------------------------------Contact--------------------------------- */
    Route::get('contact', 'ContactController@contact')->name('contact');


    /*---------------------------------Contact--------------------------------- */
    Route::get('user/detailes/{id}','ProfileController@detailes')->name('user.detailes');

    
});



/********************************************************************************************************************
 *                                                  User Routes
 ********************************************************************************************************************/

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/public/my-profile', 'UserController@userprofile')->name('userprofile');
    Route::get('/public/my-profile-update', 'UserController@myprofile')->name('myprofile');
    Route::post('/public/my-profile-update-success', 'UserController@profileupdate')->name('profile.update');
 });





/********************************************************************************************************************
 *                                                  Admin Routes
 ********************************************************************************************************************/

Auth::routes();


Route::get('dashboard', 'Admin\HomeController@index')->name('dashboard');
 
 Route::namespace('admin')->prefix('dashboard')->group(function(){
     Route::get('login', 'LoginController@showLoginForm')->name('admin.login');
     Route::post('login', 'LoginController@login')->name('admin.login');

     Route::middleware('auth:admin')->group(function () {
       
        Route::get('admin', 'HomeController@index')->name('admin.home');
        Route::post('logout', 'LoginController@logout')->name('admin.logout');

        Route::resource('about', 'AboutController');
        Route::resource('aboutm', 'AboutmController');
        Route::resource('abouth', 'AbouthController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('blog', 'BlogController');
        Route::resource('category', 'CategoryController');
        Route::resource('tag', 'TagController');
        Route::resource('post', 'PostController');
        Route::resource('video', 'VideoController');
        Route::resource('slider', 'SliderController');
        Route::resource('service', 'ServiceController');
        Route::resource('contact', 'ContactController');   
        Route::resource('page', 'PageController'); 
        Route::resource('developer', 'DeveloperController'); 
     });
 });
