<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SCategorieController;
use App\Http\Controllers\ArticleController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*Route::get("/categories",[CategorieController::class,'index']);
Route::post("/categories",[CategorieController::class,'store']);
Route::get("/categories/{id}",[CategorieController::class,'show']);
Route::delete("/categories/{id}",[CategorieController::class,'destroy']);
Route::update("/categories/{id}",[CategorieController::class,'update']);*/
//php artisan route::list tous ls routes
Route::middleware('api')->group(function () {
    Route::resource('categories', CategorieController::class);
    });
    Route::get('/Scategories', [SCategorieController::class, 'index']);
   
    Route::middleware('api')->group(function () {
        Route::resource('articles', ArticleController::class);
        });
    //pour recuperer la liste des routes php artisan route:list    
    //orm eloquent fait les jointures quand on execute sur thunder
    Route::get('/articles/art/articlespaginate', [ArticleController::class,'articlesPaginate']);