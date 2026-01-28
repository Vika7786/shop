<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
Route::get('/',[Controllers\BaseController::class,'getIndex']);
