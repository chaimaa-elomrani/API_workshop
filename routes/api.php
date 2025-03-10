<?php

use App\Http\Controllers\CosmeticsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('cosmetics', CosmeticsController::class);