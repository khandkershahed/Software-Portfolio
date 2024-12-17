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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('live_link')->nullable();
            $table->string('client_name')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('linkedin_link')->nullable();

            $table->json('platform')->nullable();
            $table->json('technology')->nullable();
            $table->json('plugin')->nullable();

            $table->string('duration')->nullable();
            $table->string('team')->nullable();

            $table->string('logo', 191)->nullable();
            $table->string('image_one', 191)->nullable();
            $table->string('image_two', 191)->nullable();
            $table->string('image_three', 191)->nullable();
            $table->string('banner_image', 191)->nullable();

            $table->string('row_one_badge')->nullable();
            $table->string('row_one_title')->nullable();
            $table->string('row_one_image')->nullable();
            $table->text('row_one_description')->nullable();
            $table->string('row_one_button_name')->nullable();
            $table->text('row_one_button_link')->nullable();

            $table->string('row_two_badge')->nullable();
            $table->string('row_two_title')->nullable();
            $table->string('row_two_image')->nullable();
            $table->text('row_two_description')->nullable();

            $table->string('row_two_button_name')->nullable();
            $table->text('row_two_button_link')->nullable();
            $table->string('row_two_image_title')->nullable();
            $table->text('row_two_image_description')->nullable();

            $table->string('row_three_badge')->nullable();
            $table->string('row_three_title')->nullable();
            $table->text('row_three_description')->nullable();
            $table->string('gallery_title')->nullable();

            $table->text('gallery_description')->nullable();

            $table->string('row_four_badge')->nullable();
            $table->string('row_four_title')->nullable();
            $table->text('row_four_description')->nullable();

            $table->string('row_five_title')->nullable();
            $table->text('row_five_description')->nullable();

            $table->string('status')->default('active')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
