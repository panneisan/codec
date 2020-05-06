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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//For questionaire
Route::get("/questionaire/create","QuestionaireController@create");
Route::post("/questionaire/store","QuestionaireController@store")->name('questionaire.store');
Route::get("/questionaire/{questionaire}","QuestionaireController@show");

//for Question
Route::get("/question/create","QuestionController@create");
Route::post("/question/store","QuestionController@store")->name('question.store');
//Route::get("/questionaire/{questionaire}","QuestionaireController@show");