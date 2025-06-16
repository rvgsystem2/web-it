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
        Schema::create('social_links', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g. Facebook, Instagram
            $table->string('icon')->nullable(); // e.g. FontAwesome class or image path
            $table->string('url'); // e.g. https://facebook.com/yourpage
            $table->boolean('status')->default(true); // to show/hide link
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_links');
    }
};
