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

// Route untuk ke method index di MyController
Route::get('/','MyController@index')->name('index');
// Route untuk ke method about di MyController
Route::get('/about','MyController@about')->name('about');

// Student
// Route untuk ke method index di StudentController
Route::get('/mahasiswa','StudentController@index')->name('student.index');
// Route untuk ke method create di StudentController
Route::get('/mahasiswa/add','StudentController@create')->name('student.create');
// Route untuk ke method store di StudentController
Route::post('/mahasiswa/add','StudentController@store')->name('student.store');
// Route untuk ke method edit di StudentController
Route::get('/mahasiswa/edit/{id}','StudentController@edit')->name('student.edit');
// Route untuk ke method update di StudentController
Route::get('/mahasiswa/edit/{id}','StudentController@update')->name('student.update');
// Route untuk ke method destroy di StudentController
Route::get('/mahasiswa/delete/{id}','StudentController@destroy')->name('student.destroy');

