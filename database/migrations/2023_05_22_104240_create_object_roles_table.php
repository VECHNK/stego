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
        Schema::create('object_roles', function (Blueprint $table) {
            $table->id('object_role_id');
            $table->integer('object_id');
            $table->integer('role_id');
            $table->boolean('is_visible');
            $table->boolean('is_clickable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('object_roles');
    }
};
