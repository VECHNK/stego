<?php

use App\Http\Controllers\CheckController;
use App\Http\Controllers\st_progContorller;
use App\Http\Controllers\UploadController;
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

Route::get('/', function () {
    return view('home');
});

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
//Show matched files
Route::get('/listchecks',[UploadController::class,'show']);
//Upload a file to check
Route::get('/upload', [UploadController::class, 'upload']);
//Single file upload
Route::post('/upload-single',          [UploadController::class, 'uploadSingle']);
//Multiple files upload
Route::post('/upload-multiple',        [UploadController::class, 'uploadMultiple']);

/*Route::post('/upload-single-custom',   [UploadController::class, 'uploadSingleCustom']);
Route::post('/upload-multiple-custom', [UploadController::class, 'uploadMultipleCustom']);*/
