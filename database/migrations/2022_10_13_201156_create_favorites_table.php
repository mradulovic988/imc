<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete()->onDelete('cascade');
            $table->foreignId('list_id');
            $table->string('show_category');
            $table->string('show_id');
            $table->string('show_name');
            $table->string('show_rating');
            $table->string('show_date');
            $table->string('show_genre');
            $table->string('show_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('favorites');
    }
};
