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
        Schema::create('custom_builds', function (Blueprint $table) {
            $table->id();

            $table->string('page_number')->nullable();
            $table->string('frontend_technology')->nullable();
            $table->string('backend_technology')->nullable();
            $table->string('database_technology')->nullable();
            $table->string('database')->nullable();
            $table->string('database_backup')->nullable();
            $table->string('content')->nullable();
            $table->string('graphic_design')->nullable();
            $table->string('maintenance_duration')->nullable();
            $table->string('development_duration')->nullable();

            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('status')->default('active')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_builds');
    }
};
