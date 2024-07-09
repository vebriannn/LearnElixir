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
        Schema::create('tbl_lesson', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_course');
            $table->string('title_lesson');
            $table->string('time_lesson');
            $table->integer('lesson');
            
            $table->foreign('id_course')->references('id')->on('tbl_course')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_lesson');
    }
};