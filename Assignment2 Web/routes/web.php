<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\MailController;

Route::get('/index/en', [HomeController::class,'LoadEnIndex']);
Route::get('/index/ar', [HomeController::class,'LoadArIndex']);

Route::POST('add',[CrudController::class,'AddUser']);
