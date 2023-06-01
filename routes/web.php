<?php

use App\Http\Controllers\st_progContorller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\st_prog;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

/*Route::get('/addapp', function () {
    return view('addapp');
});

Route::get('/editapp', function () {
    return view('editapp');
});

Route::get('/listapp', function () {
    return view('listapp', [
        'heading'=> 'List of apps',
        'listapp' => st_prog::all()
    ]);
});*/
//Show list of apps
Route::get('/listapp',[st_progContorller::class,'show']);
//Single app
Route::get('/listapp/{id}', function ($id) {
    return view('st_prog', [
        'st_prog' => st_prog::find($id)
    ]);
});
//Add app form
Route::get('/addapp',[st_progContorller::class,'create']);
//Add app method
Route::post('/addapp',[st_progContorller::class,'store']);
//Edit app form
Route::get('/editapp/{st_prog}',[st_progContorller::class,'edit']);
//Update app
Route::put('/editapp/{st_prog}', [st_progContorller::class,'update']);
//Delete app
Route::delete('/editapp/{st_prog}', [st_progContorller::class,'destroy']);


//-----------------------------------------------------
//All listings
Route::get('/listings', function () {
    return view('listings', [
        'heading'=> 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//-----------------------------------------------------