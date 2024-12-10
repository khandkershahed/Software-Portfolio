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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('row_one_badge')->nullable();//
            $table->string('row_one_title')->nullable();//
            $table->string('row_one_image_big')->nullable();//size(420*510)
            $table->string('row_one_image_small')->nullable();//size(270*270)
            $table->longText('row_one_description')->nullable();//
            $table->string('row_one_button_name')->nullable();//
            $table->string('row_one_button_url')->nullable();//

            $table->string('row_three_badge')->nullable();//
            $table->string('row_three_title')->nullable();//
            $table->string('row_three_image_big')->nullable();//size(636*334)
            $table->string('row_three_image_small')->nullable();//size(636*608)
            $table->longText('row_three_description')->nullable();//
            $table->string('row_three_button_name')->nullable();//
            $table->string('row_three_button_url')->nullable();//
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
