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
        Schema::create('st_progs', function (Blueprint $table) {
            $table->id();
            $table->string('prog_name')->nullable();
            $table->boolean('is_portable')->nullable();
            $table->string('version')->nullable();
            $table->string('type')->nullable();
            $table->string('extension')->nullable();
            $table->string('algorithm')->nullable();
            $table->string('author')->nullable();
            $table->string('creation_date')->nullable();
            $table->string('encryption')->nullable();
            $table->string('operating_system')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('st_progs');
    }
};
