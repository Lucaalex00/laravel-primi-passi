<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    return view('app');
});

Route::get('home', function () {
    $data =[
        'message' => 'Welcome',
        'name' => 'USER',
    ];
    
    return view('home', $data);
});

Route::get('contacts', function () {
    $data =[
        'message' => 'Come to meet our collaborators : ',
        'contacts_name' => ['Luke', 'Paul', 'Andrew'],
    ];
    
    return view('contacts', $data);
});
Route::get('aboutme', function () {
    $data =[
        'message' => 'lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet',
        'title' => 'Hello !',
    ];
    
    return view('aboutme', $data);
});
