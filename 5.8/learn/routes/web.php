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

// root
// Route::get('/', function () {
//     return view('index');
// });

// // about
// Route::get('/about', function () {
//     $nama = 'Udin Samsudin';
//     // bagian ke dua dari view adalah parameter untuk input data
//     return view('about', ['nama' => $nama]);
// });

// // Mahasiswa
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

Route::get('/', 'PagesController@home');
Route::get('/home', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// Students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
// ini karena di create kan ada kirim data pakai post jadi kekirim ke sini
// jika method route nya post maka akan masuk ke sini 
Route::post('/students', 'StudentsController@store');
