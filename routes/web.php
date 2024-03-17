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
    return view('listings', [
        "heading" => "Latest Listings",
        "listings" => [
            "id" => "1",
            "title " => "Listing One",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque facilis iste expedita tenetur dolor quis harum corporis excepturi suscipit aut quia dignissimos, debitis adipisci consequatur veritatis qui aliquam autem. Ipsum!",
        ],
        [
            "id" => "2",
            "title " => "Listing Two",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque facilis iste expedita tenetur dolor quis harum corporis excepturi suscipit aut quia dignissimos, debitis adipisci consequatur veritatis qui aliquam autem. Ipsum!",
        ],
    ]);
});


