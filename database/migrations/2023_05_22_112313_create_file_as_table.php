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
        Schema::create('file_as', function (Blueprint $table) {
            $table->id('file_as_id');
            $table->string('file_name');
            $table->string('st_prog_name');
            $table->string('type')->nullable();
            $table->string('key_registry')->nullable();
            $table->integer('size')->nullable();
            $table->string('SHA1')->nullable();
            $table->string('SHA256')->nullable();
            $table->string('MD5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_as');
    }
};
