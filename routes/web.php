<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

Route::get('/demo', 'Front\DemoController@index')->name('demo.index');

/*
|----------------------------------------------------------------------------------------
| yl7e02_http_client
|----------------------------------------------------------------------------------------
| 
| @source : vendor/laravel/framework/src/illuminate/Http/Client/Response.php
| @options : body, json, object, header, headers, status, 
|   effectiveUri, successful, ok, redirect & etc.
|
*/
Route::get('/demo2', function(){
    // get
    // $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');

    // post
    $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
        'userId' => 123,
    ]);

    // post as Form
    $response = Http::asForm()->post('https://jsonplaceholder.typicode.com/posts', [
        'userId' => 123,
    ]);

    // post a file or attachment
    $response = Http::attach('image-upload', file_get_content('photo.jpg'), 'new-file-name.jpg')->post('https://jsonplaceholder.typicode.com/posts', [
        'userId' => 123,
    ]);

    // add headers
    $response = Http::withHeaders([
        'X-ANYNAME' => 'This is my header'
    ])->post('https://jsonplaceholder.typicode.com/posts', [
        'userId' => 123,
    ]);

    // With basic auth
    $response = Http::withBasicAuth(
        'username@gmail.com', 'VeryStrongPassword'
    )->post('https://jsonplaceholder.typicode.com/posts', [
        'userId' => 123,
    ]);

    // With Token
    $response = Http::withToken(
        'username@gmail.com', 'VeryStrongPassword'
    )->post('https://jsonplaceholder.typicode.com/posts', [
        'userId' => 123,
    ]);
    dd($response->json());
});