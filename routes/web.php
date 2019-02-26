<?php

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

Route::get('/', 'PagesController@index');

//  '/about' is reffering to URL. What the Url will do is defined in the pages/about.blade.php file which is in the resources/pages/about
//cncatanation is done using . notation. if we say emon . ivon then emon and ivon will be concatanated.

//Route::get('/about', 'PagesController@index');


// Route::get('/hello/{id}', function ($id) {
//     return 'hello world '.$id;
// });


// we pretty much never want to return a view from route. what we want to do is creat a controller and then set the route to go to a controller 
//and the controller will give the link to view.
//to create a controller we need to use the terminal. 
// then we need to write : php artisan make:controller PagesController
// here PagesController is the name of the controller. this controller is created in the app/http/controllers/auth path.
// we should go to that path to learn the next step.



Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//PostsController controllers has many functions to route. it would take too much time to do all that
//a really simple way of doing this would be the below given way
Route::resource('posts','PostsController');
