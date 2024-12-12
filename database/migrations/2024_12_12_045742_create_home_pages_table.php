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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('row_one_badge')->nullable();
            $table->string('row_one_title')->nullable();
            $table->text('row_one_description')->nullable();
            $table->text('row_one_link')->nullable();
            $table->string('row_two_icon_one')->nullable();
            $table->string('row_two_icon_one_title')->nullable();
            $table->string('row_two_icon_two')->nullable();
            $table->string('row_two_icon_two_title')->nullable();
            $table->string('row_two_icon_three')->nullable();
            $table->string('row_two_icon_three_title')->nullable();
            $table->string('row_two_icon_four')->nullable();
            $table->string('row_two_icon_four_title')->nullable();
            $table->string('row_three_title')->nullable();
            $table->string('row_three_pdf')->nullable();//PDF
            $table->string('row_four_title')->nullable();
            $table->text('row_four_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
