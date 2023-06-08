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
        Schema::create('filechecks', function (Blueprint $table) {
            $table->id('id');
            $table->string('path');
            $table->string('filename');
            $table->string('MD5');
            $table->string('type');
            $table->int('size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filechecks');
    }
};
