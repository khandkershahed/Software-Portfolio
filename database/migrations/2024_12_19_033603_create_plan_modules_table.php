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
        Schema::create('plan_modules', function (Blueprint $table) {
            $table->id();

            $table->string('type')->nullable(); //selectbox
            $table->string('title')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('value')->nullable();
            $table->string('currency')->nullable(); //selectbox
            $table->double('price')->nullable();
            $table->string('status')->default('active')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_modules');
    }
};
