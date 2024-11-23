<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create("User_Articles", function (Blueprint $table) {
			$table->id();
			$table->string("Title");
			$table->string("Article");
			$table->timestamp("Date");
			$table->integer("News_Id");
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists("User_Articles");
	}
};