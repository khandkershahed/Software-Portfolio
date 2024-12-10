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
        Schema::create('company_clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 191)->nullable();
            $table->string('slug')->nullable();
            $table->string('logo', 250)->nullable();
            $table->string('banner_image', 250)->nullable();
            $table->text('company_website')->nullable();
            $table->string('status')->default('active')->comment('inactive,active');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_clients');
    }
};
