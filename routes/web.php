<?php

use App\Http\Controllers\PersonNameController;
use Illuminate\Support\Facades\Route;

Route::get('person-name/', [PersonNameController::class, 'show']);
