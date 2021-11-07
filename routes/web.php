<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CivilizationController;
use App\Http\Controllers\UniqueUnitController;
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
    return view('/navbarhelper/welcomepage',[
        "title" => "Homepage",
        "pagetitle" => "Welcome"
    ]);
});


Route::resource('listofcivilization', CivilizationController::class);

Route::resource('listofuniqueunit', UniqueUnitController::class);

Route::get('/createcustomcivs', function () {
    return view('/navbarhelper/createcustomcivs', [
        "title" => "Custom Project",
        "pagetitle" => "Workbench"
    ]);
});

Route::get('/aboutauthor', function () {
    return view('/navbarhelper/aboutauthor', [
        "title" => "About Author",
        "name" => "Wanto",
        "email" => "tdewanto@student.ciputra.ac.id",
        "line" => "blueguy5021",
        "pagetitle" => "Contact"
    ]);
});

Route::get('/createcustomproject', function () {
    return view('/navbarhelper/createcustomproject', [
        "title" => "Custom Project",
        "pagetitle" => "Workbench"
    ]);
});