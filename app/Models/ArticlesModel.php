<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticlesModel extends Model
{
	protected $fillable = ["Title", "Article", "Date", "News_Id"];
}
