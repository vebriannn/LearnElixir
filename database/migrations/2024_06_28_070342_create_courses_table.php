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
        Schema::create('tbl_course', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['frontend', 'backend', 'fullstack']);
            $table->string('title');
            $table->string('deskripsi');
            $table->string('mentor');
            $table->string('images');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};