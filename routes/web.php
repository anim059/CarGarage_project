<?php

use Illuminate\Support\Facades\Route;
use App\PostCar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    
     $post=DB::table('post_new_cars')->get();
        $postRScar=DB::table('post_cars')->get();
        
        return view('home.index',['posts'=>$post,'postRScars'=>$postRScar]);
});

Auth::routes();

Route::resource('home', 'HomeController');
Route::get('/post/carbrand','PostCarController@postcarbrand')->name('postcar.postcarbrand');
Route::post('/post/carbrand','PostCarController@postcarbrandupdate')->name('postcar.postcarbrandupdate');


Route::get('/categories/new','AllCarController@shownewcars')->name('AllCar.shownewcars');
Route::get('/categories/rent','AllCarController@showrentcars')->name('AllCar.showrentcars');
Route::get('/categories/sell','AllCarController@showsellcars')->name('AllCar.showsellcars');
Route::get('/brand/allcars','AllCarController@allcarbrands')->name('AllCar.allcarbrands');
Route::get('/brand/search/brand','AllCarController@searchcarbrands')->name('AllCar.searchcarbrands');

//Route::resource('admin','admin\UserController');
//Route::resource('/admin','admin\UserController',['except'=>['show','create','store']]);
// Route::resource('/admin/login','admin\loginController@index')->name(''*',admin.login');
Route::get('/admin/register','admin\UserController@register')->name('admin.register');
Route::post('admin/register/post','admin\UserController@regupdate')->name('admin.regupdate');

Route::resource('post','PostCarController');
Route::get('admin/showpost','admin\UserController@showpost')->name('admin.showpost');

Route::namespace('admin')->middleware('can:admin')->group(function () {

   Route::resource('/admin','UserController');

	});
