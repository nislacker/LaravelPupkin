<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', [
    'as' => 'home',
    //'middleware' => 'auth',
    'uses' => 'Admin\IndexController@show'
])/*->middleware('auth')*/
;

Route::get('/list', function () {
    return view('default.list');
});

Route::match(['get', 'post'], '/contact/{name?}', ['uses' => 'Admin\ContactController@show', 'as' => 'contact']);


Route::get('/about', ['uses' => 'Admin\AboutController@show', 'as' => 'about']);


Route::get('/login', function () {
    return view('login');
});

//Route::get('/about', 'uses'=>'FirstController@showAbout');
//Route::get('/pages/{id}', 'FirstController@showPages');


Route::get('/article/{page}',
    ['uses' => 'Admin\CoreController@showArticle', 'as' => 'article']);//->middleware(['mymiddle:33']);


Route::get('/articles', ['uses' => 'Admin\CoreController@showArticles', 'as' => 'articles']);

// list of pages
//Route::resource('/pages', 'PagesController@postIndex');
Route::post('/pages', function () {
    //var_dump($_POST);
    echo 'FORM DATA';
});


Route::get('/form', [
    'as' => 'form',
    function () {
        return view('form');
    }
]);