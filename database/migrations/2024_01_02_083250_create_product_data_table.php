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
        Schema::create('product_data', function (Blueprint $table) {
            $table->id('productid');
            $table->string('photo');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');            
            $table->string('productname');            
            $table->string('category');            
            $table->bigInteger('price');            
            $table->string('description');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_data');
    }
};
