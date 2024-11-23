<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix("/courses")->group(function() {
	Route::post("/", [NewsController::class, "post_news"]);
	Route::put("/{id}", [NewsController::class, "edit_news"]);
	Route::delete("/{id}", [NewsController::class, "delete_news"]);
	Route::get("/", [NewsController::class, "get_news"]);
	Route::post("/{id}", [NewsController::class,"add_article"]);
	Route::post("/{id}/request", [NewsController::class, "request_news"]);
	Route::get("/{id}/articles", [NewsController::class, "get_articles"]);
	Route::post("/{id}/attachment", [NewsController::class, "upload_news_attachment"]);
	Route::post("/{id}/articles/attachment", [NewsController::class, "upload_article_attachment"]);
});