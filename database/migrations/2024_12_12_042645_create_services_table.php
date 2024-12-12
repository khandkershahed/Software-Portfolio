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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('short_description')->nullable()->nullable();
            $table->longText('description')->nullable()->nullable();
            $table->string('logo', 191)->nullable();//image
            $table->string('image', 191)->nullable();//image
            $table->string('banner_image', 191)->nullable();//image
            $table->string('middle_image_one', 191)->nullable();//image
            $table->string('middle_image_two', 191)->nullable();//image
            $table->text('footer')->nullable()->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
