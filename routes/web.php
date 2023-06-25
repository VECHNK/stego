<?php

//use App\Models\Listing;
use App\Models\st_prog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\st_progContorller;
use App\Models\Role;

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
Route::get('/addapp',[st_progContorller::class,'create'])->middleware('auth');
//Add app method
Route::post('/addapp',[st_progContorller::class,'store'])->middleware('auth');
//Edit app form
Route::get('/editapp/{st_prog}',[st_progContorller::class,'edit'])->middleware('auth');
//Update app
Route::put('/editapp/{st_prog}', [st_progContorller::class,'update'])->middleware('auth');
//Delete app
Route::delete('/editapp/{st_prog}', [st_progContorller::class,'destroy'])->middleware('auth');
//Show matched files
Route::get('/listchecks',[UploadController::class,'show']);
//Upload a file to check
Route::get('/upload', [UploadController::class, 'upload']);
//Single file upload
Route::post('/upload-single', [UploadController::class, 'uploadSingle']);
//Multiple files upload
Route::post('/upload-multiple', [UploadController::class, 'uploadMultiple']);
//Upload Program Files
Route::post('/upload-program/{st_prog}', [UploadController::class, 'uploadProgFiles'])->middleware('auth');
//Show user-create form
Route::get('/register', [UserController::class,'create'])->middleware('guest');
//Create new user
Route::post('/users',[UserController::class, 'store'])->middleware('guest');
//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login');
//Login user
Route::post('users/authenticate', [UserController::class, 'authenticate']);
