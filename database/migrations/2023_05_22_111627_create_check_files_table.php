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
        Schema::create('check_files', function (Blueprint $table) {
            $table->id('checkfile_id');
            $table->integer('check_id');
            $table->string('file_name');
            $table->string('file_type');
            $table->integer('file_size');
            $table->string('MD5')->nullable();
            $table->timestamps();
            $table->string('reg_key')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_files');
    }
};
