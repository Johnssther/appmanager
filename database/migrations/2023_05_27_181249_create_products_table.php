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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('barcode')->nullable();
            $table->integer('units')->default(0);
            $table->string('color')->nullable();
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL'])->comment("XS=mas pequeña S=pequeña M=media L=grande XL=mas grande")->nullable();
            $table->double('price_in');
            $table->double('price_out');
            $table->string('sku');
            $table->text('description');
            $table->boolean('isActive')->default(true);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
