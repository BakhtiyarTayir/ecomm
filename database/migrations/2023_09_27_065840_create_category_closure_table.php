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

        Schema::create('category_closure', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ancestor');
            $table->unsignedBigInteger('descendant');
            $table->integer('depth');
        
            $table->foreign('ancestor')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('descendant')->references('id')->on('categories')->onDelete('cascade');
        });
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_closure');
    }
};
