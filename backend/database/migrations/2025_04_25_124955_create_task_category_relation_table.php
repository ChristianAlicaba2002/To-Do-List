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
        Schema::create('task_category_relation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->references('task_id')->on('task')->onDelete('cascade');
            $table->foreignId('category_id')->references('category_id')->on('task_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_category_relation');
    }
};
