<?php

use App\Http\Controllers\Form1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3\Category\CategoryController;
use App\Http\Controllers\Site3\SubCategory\SubCategoryController;
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
/*
Route::prefix('site2')->group(function(){
    Route::get('/', [Site2Controller::class, 'index'])->name('index');
    Route::get('about', [Site2Controller::class, 'about'])->name('about');
    Route::post('post_msg', [Site2Controller::class, 'post_msg'])->name('post_msg');
    Route::get('/view', [Site2Controller::class, 'view'])->name('view');

});
*/
////////////////////////////////////// V4 //////////////////////////////////////
/*
Route::get('form1', [Form1Controller::class, 'index'])->name('index');
Route::post('form1Submit', [Form1Controller::class, 'form1Submit'])->name('form1Submit');

Route::get('form2', [Form1Controller::class, 'form2image'])->name('form2image');
Route::post('form2Submit', [Form1Controller::class, 'form2Submit'])->name('form2Submit');
*/
////////////////////////////////////// V5 //////////////////////////////////////

// Route::post('form3Submit', [Form1Controller::class, 'form3Submit'])->name('form3Submit');

Route::prefix('site3')->name('site3.')->group(function(){
/*
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function(){

        Route::get('/', 'index')->name('index');

    });
*/
    Route::prefix('sub_category')->name('sub_category.')->controller(SubCategoryController::class)->group(function(){
        
        Route::get('/{id}', 'index')->name('index');
        
    });
        
});

////////////////////////////////////// V6 //////////////////////////////////////

// Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
/*
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
*/

Route::resource('category', CategoryController::class); 
// هذا الرابط يغني عن 6 روابط السابقة
// واذا كنا نريد انشاء الميثود في صفحة الكونترولار والتي هيا الانشاء والتعديل والحذف الخ
// php artisan make:controller NameController -r
// -r => create as controller resource