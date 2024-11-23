<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\NewsController;

Route::prefix("/courses")->group(function () {
	Route::post("/", [NewsController::class, "post_news"]);
	Route::put("/{id}", [NewsController::class, "edit_news"]);
	Route::delete("/{id}", [NewsController::class, "delete_news"]);
	Route::get("/", [NewsController::class, "get_news"]);
	Route::post("/{id}", [NewsController::class, "add_article"]);
});