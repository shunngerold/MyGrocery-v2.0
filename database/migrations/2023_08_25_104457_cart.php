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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->string('product_image')->nullable();
            $table->string('product_name');
            $table->string('category');
            $table->integer('price');
            $table->integer('stock');
            $table->string('description');
            $table->date('date_in_wh');
            $table->date('date_expiry');
            $table->boolean('active')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
