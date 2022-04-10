<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GuaranteeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/test', function (Request $request){
    return 'Authenticated';
});

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user', function (Request $request){
        return $request->user();
    });

   Route::apiResource('/companies', CompanyController::class);
   Route::apiResource('/categories', CategoryController::class);
   Route::apiResource('/guarantees', GuaranteeController::class);

});

Route::post('/login', [AuthController::class, 'login']);
