<?php

use App\Http\Controllers\SanctumController;
use Illuminate\Support\Facades\Route;

Route::group(['middlware'=> []],function(){
    Route::Post('/sanctum/token',[SanctumController::class,'issueToken']);

});