<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
	protected $fillable = ["Title", "Article", "Date", "MinAge"];
}
