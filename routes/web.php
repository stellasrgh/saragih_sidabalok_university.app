<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ReasonController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
use Illuminate\Auth\Events\Logout;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('guest')->group(function () {
    // Logout
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/authentication', [AuthController::class, 'authenticate']);
});


Route::middleware('auth')->group(function () {


    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // About
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/about/edit/{about}', [AboutController::class, 'edit']);
    Route::post('/about/update/{about}', [AboutController::class, 'update']);

    // service
    Route::get('/service', [ServiceController::class, 'index']);
    Route::get('/service/create', [ServiceController::class, 'create']);
    Route::post('/service/store', [ServiceController::class, 'store']);
    Route::get('/service/edit/{service}', [ServiceController::class, 'edit']);
    Route::post('/service/update/{service}', [ServiceController::class, 'update']);
    Route::get('/service/delete/{service}', [ServiceController::class, 'destroy']);
    Route::get('/service/show/{service}', [ServiceController::class, 'show']);

    // Reason
    Route::get('/reason', [ReasonController::class, 'index']);
    Route::get('/reason/create', [ReasonController::class, 'create']);
    Route::post('/reason/store', [ReasonController::class, 'store']);
    Route::get('/reason/edit/{reason}', [ReasonController::class, 'edit']);
    Route::post('/reason/update/{reason}', [ReasonController::class, 'update']);
    Route::get('/reason/delete/{reason}', [ReasonController::class, 'destroy']);
    Route::get('/reason/show/{reason}', [ReasonController::class, 'show']);

    // major
    Route::get('/major', [MajorController::class, 'index']);
    Route::get('/major/create', [MajorController::class, 'create']);
    Route::post('/major/store', [MajorController::class, 'store']);
    Route::get('/major/edit/{major}', [MajorController::class, 'edit']);
    Route::post('/major/update/{major}', [MajorController::class, 'update']);
    Route::get('/major/delete/{major}', [MajorController::class, 'destroy']);
    // 2 ++++
    Route::get('/major/show/{major}', [MajorController::class, 'show']);
    // ++++

    // presentation
    Route::get('/presentation', [PresentationController::class, 'index']);
    Route::get('/presentation/edit/{presentation}', [PresentationController::class, 'edit']);
    Route::post('/presentation/update/{presentation}', [PresentationController::class, 'update']);
    Route::get('/presentation/show/{presentation}', [PresentationController::class, 'show']);

    // contact
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/contact/create', [ContactController::class, 'create']);
    Route::get('/contact/show/{contact}', [ContactController::class, 'show']);

    // user
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/store', [UserController::class, 'store']);
    Route::get('/user/edit/{user}', [UserController::class, 'edit']);
    Route::post('/user/update/{user}', [UserController::class, 'update']);
    Route::get('/user/delete/{user}', [UserController::class, 'destroy']);
    Route::get('/user/show/{user}', [UserController::class, 'show']);

    // registration
    Route::get('/registration', [RegistrationController::class, 'index']);
    Route::post('/registration/store', [RegistrationController::class, 'store']);
    Route::get('/registration/edit/{registration}', [RegistrationController::class, 'edit']);
    Route::get('/registration/show/{registration}', [RegistrationController::class, 'show']);
    Route::post('/registration/update/{registration}', [RegistrationController::class, 'update']);
    Route::get('/registration/delete/{registration}', [RegistrationController::class, 'destroy']);


    // LOGOUT
    Route::get('/logout', [AuthController::class, 'logout']);
});

// --------------------FRONTEND --------------------------------

// frontend
Route::get('/', [IndexController::class, 'index']);
Route::post('/contact/store', [ContactController::class, 'store']);
