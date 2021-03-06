<?php
use App\Mail\ContactMessageCreated;

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

Route::get('/',[
    'as'=>'home',
    'uses'=>'PagesController@home'
]);

Route::get('/text-email',function(){ 
    return new ContactMessageCreated('Gnelezie','zie.nanien@gmail.com',"Merci de m'avoir contacter");
});



Route::get('/about',[
    'as'=>'about',
    'uses'=>'PagesController@about'
]);
 
Route::get('/contact','contactController@create')->name('contact');
Route::post('/contact','contactController@store')->name('contact');
