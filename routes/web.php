<?php

use App\Http\Controllers\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

////////////////////////////////////// V1 //////////////////////////////////////

/*
Route::get('osama', function(){
    return 'Welcome to osama page';
});
*/

/*
Route::get('users/profile', function(){
        return 'users profile ';
});
*/

/*
Route::get('users/profile/{name}', function($name){
        return 'users profile ' . $name;
});
*/
/*
Route::get('users/profile/{name?}', function($name = null){
    return 'users profile ' . $name;
}); // الفكرة هان انو مش ضروري تعبت الاسم في الرابط واذا بعته حيتم طباعته واذا لم تبعته لن يتم طباعة شيء مكانه لانو قيمته فارغ
*/

////////////////////////////////////// V2 //////////////////////////////////////

// site 1 .. site1/..
/*
Route::prefix('site1')->name('site.')->controller(SiteController::class)->group(function(){
Route::get('/index', 'index')->name('index');
Route::get('/about', 'about')->name('about');
Route::get('/services', 'services')->name('services');
Route::get('/contact', 'contact')->name('contact');
});

Route::get('/', function () {
    return view('master');
});

Route::get('home', function(){
    return view('site1.home');
});
*/
////////////////////////////////////// V3 //////////////////////////////////////

// Route::prefix('site2')->group(function(){
//     Route::get('/', [Site2Controller::class, 'index'])->name('index');
// });