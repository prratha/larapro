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

Route::get('/contact', function () {
    return view('contact');
});

//Route::get('/listing', function () {
//
//
//    $results = DB::select('select * from users');
//$data="";
//
//foreach($results as $result)
//    {
//         $data=$data.$result->fname."<td>".$result->lname."<td>".$result->email."<td>".$result->number."<tr>";
//    }
//
//return $data;
//});

Route::get('/listing', function () {


    $records = DB::table('users')->get();

    return view('registered', ['records' => $records]);
});



