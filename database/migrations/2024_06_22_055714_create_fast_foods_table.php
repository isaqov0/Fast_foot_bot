<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fast_foods', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('description')->nullable();
			$table->integer('price');
			$table->integer('number');
			$table->integer('discount')->default(0);
	        $table->unsignedBigInteger('category_id');
			$table->foreign('category_id')->references('id')->on('categories');
			$table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fast_foods');
    }
};
