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
            $table->unsignedBigInteger('id_mentor');
            $table->string('kategori');
            $table->string('title');
            $table->string('slug');
            $table->longText('deskripsi');
            $table->string('images');
            $table->string('duration');
            $table->integer('total_lesson');
            $table->timestamps();

            $table->foreign('id_mentor')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_course');
    }
};