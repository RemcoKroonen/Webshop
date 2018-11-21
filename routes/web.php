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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categorie','CategorieController@index')->name('categorie');
//Route::get('/article','ArticleController@index')->name('article');
Route::resource('/article','ArticleController');
Route::get('/articlesincategorie/{categorie_id}', 'ArticleController@articlesincategorie')->name('articlesincategorie');
Route::get('/toevoegen/{article_id}/{articles_ordered}', 'ShoppingCartController@toevoegen')->name('toevoegen');
//Route::get('/user', 'UserController@index');
