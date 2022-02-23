<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function (Request $request){
        return $request->user();
    });

    Route::get('/companies/{company}', [CompanyController::class, 'show']);
});
