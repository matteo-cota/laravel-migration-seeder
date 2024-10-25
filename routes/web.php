<?php
use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [TrainController::class, 'index']);