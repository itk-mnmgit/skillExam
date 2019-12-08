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

Route::get('/', 'QuestionController@index')->name('question.index');

Route::group(['middleware' => 'auth'], function() {

Route::get('question/create', 'QuestionController@create')->name('question.create');
Route::post('question/create', 'QuestionController@store')->name('question.create');
Route::delete('question/{id}/delete', 'QuestionController@destroy')->name('question.destroy');
Route::get('question/{id}/edit', 'QuestionController@edit')->name('question.edit');
Route::put('question/{id}/update', 'QuestionController@update')->name('question.update');

Route::get('answer/create', 'AnswerController@create')->name('answer.create');
Route::post('answer/create', 'AnswerController@store')->name('answer.create');
Route::delete('answer/{id}/delete', 'AnswerController@destroy')->name('answer.destroy');
Route::get('answer/{id}/edit', 'AnswerController@edit')->name('answer.edit');
Route::put('answer/{id}/update', 'AnswerController@update')->name('answer.update');



});
Auth::routes();
