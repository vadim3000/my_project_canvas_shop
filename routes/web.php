<?php

use App\Http\Controllers\UserInfoController;
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

//Route::get('/', function () {
//    return view('welcome');
//})->middleware('response.log');



Route::get('/foo', function () {
    return ('Hello world');
});

Route::get('/', function (){
    return view(('pages/homepage'));
});

Route::get('/blog', function (){
    return view(('pages/blog-list'));
});

Route::get('/blog/article', function (){
    return view(('pages/blog-article'));
});


Route::group(['prefix' => '/user'], function () {
    Route::get('/info', ['uses' => UserInfoController::class . '@index']);
    Route::post('/info', ['uses' => UserInfoController::class . '@storeInfo']);
    Route::get('/info/stored', ['uses' => UserInfoController::class . '@stored']);});

Route::get('/manufacturer', [\App\Http\Controllers\ManufacturerController::class, 'create'])->name('contactUs.store');

Route::get('/my_project_category/create', [\App\Http\Controllers\MyProjectCategoriesController::class, 'create'])->name('contactUs.store');

Route::get('/blog/author/create', [\App\Http\Controllers\AuthorController::class, 'create'])->name('contactUs.store');
Route::get('/blog/create_category', [\App\Http\Controllers\BlogCategoriesController::class, 'create'])->name('contactUs.store');
Route::get('/blog/tag/create', [\App\Http\Controllers\TagController::class, 'create'])->name('contactUs.store');

Route::get('/pages/blog_list', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/pages/blog_article', [\App\Http\Controllers\BlogController::class, 'show']);

Route::get('/pages/blog_article', [\App\Http\Controllers\BlogController::class, 'show']);

Route::get('/contacts', [\App\Http\Controllers\ContactUsController::class, 'contactUs'])->name('contactUs.show');
Route::post('/store-contact-info', [\App\Http\Controllers\ContactUsController::class, 'storeContactInfo'])->name('contactUs.store');

