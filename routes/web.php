<?php

use Illuminate\Http\Request;
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

Route::get('/hello', function () {
    return response('<h1>Hello Laravel</h1>')
        ->header('Content-Type', 'text/plain')
        ->header('custom-header', 'custom value');
});

Route::get('/posts/{id}', function($id) {
    return response('Post' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    // http://laragigs.test/search?name=some%20name&place=some%20place
    return($request->name . ' ' .$request->place);
});