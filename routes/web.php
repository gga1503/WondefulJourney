<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [ArticleController::class, 'listArticle']);

Route::get('/category/{id}', [CategoryController::class, 'listArticle']);

Route::get('/full_story/{id}', [ArticleController::class, 'fullStory']);

Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');
Route::get('/logout', 'UserController@Logout');

// Route::get('/session/{email}/{password}', [SessionController::class, 'create'])->name('session');

Route::get('/list_user', function () {
    return view('admins.list_user');
});

Route::get('/list_user', [UserController::class, 'listUser']);
Route::get('/delete/{user_id}', 'UserController@delete');

Route::get('/greeting', function () {
    return view('users.greeting');
});

Route::get('/profile', function () {
    $user = new User;
    $user = Auth::user();
    return view('users.profile', compact('user'));
});
Route::put('/profile', [UserController::class, 'update']);

Route::get('/list_blog', [ArticleController::class, 'listTitle']);
Route::get('/delete/{article_id}', 'ArticleController@delete');

Route::get('/create_blog', [CategoryController::class, 'list']);
Route::post('/create_blog', [ArticleController::class, 'create']);

Route::get('/sign_up', 'UserController@getRegister');
Route::post('/sign_up', 'UserController@create')->name('verification.verify');
