<?php

namespace App\Http\Controllers;

use App\Models\ArticlesModel;
use Illuminate\Http\Request;
use App\Models\NewsModel;
class NewsController extends Controller
{
    function post_news($id,Request $request)
	{
		$news = NewsModel::create([
            "Title" => $request->Title,
            "Article" => $request->Article,
            "MinAge" => $request->MinAge ?? null,
			"Date" => $request->Date ?? null,
        ]);

        return response()->json([
            "news" => $news,
        ]);
	}
	function edit_news($id,Request $request)
	{
		$news = NewsModel::find($id);
        if (!$news) {
            return response()->json([
                "message" => "News not found",
            ], 404);
        }
		$news->update([
            "Title" => $request->Title ?? $news->Title,
            "Article" => $request->Article ?? $news->Article,
            "MinAge" => $request->MinAge ?? $news->MinAge,
            "Date" => $request->Date ?? $news->Date,
        ]);

        return response()->json([
            "updated_news" => $news,
        ]);
	}
	function delete_news($id,Request $request)
	{
		$news = NewsModel::find($id);
        if (!$news) {
            return response()->json([
                "message" => "News not found",
            ], 404);
        }

        $news->delete();

        return response()->json([
            "message" => "News deleted successfully",
        ]);
	}
	function get_news($id,Request $request)
	{
		$courses = NewsModel::all();

        return response()->json([
            "courses" => $courses
        ]);
	}
	function add_article($id,Request $request)
	{
		$course = ArticlesModel::create([
            "Title" => $request->Title,
            "Article" => $request->Article,
            "Date" => $request->MinAge ?? null,
			"News_Id" => $request->Date ?? null,
        ]);

        return response()->json([
            "new_course" => $course
        ]);
	}
}
