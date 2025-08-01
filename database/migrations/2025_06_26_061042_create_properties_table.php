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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
              $table->string('name');
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
        $table->foreignId('category_id')->constrained()->onDelete('cascade');
       $table->string('image')->nullable();
        $table->string('status')->default('Available');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
