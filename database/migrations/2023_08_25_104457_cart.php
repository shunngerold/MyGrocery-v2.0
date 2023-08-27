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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->string('product_image')->nullable();
            $table->string('product_name');
            $table->string('category');
            $table->integer('price');
            $table->integer('stock');
            $table->string('description');
            $table->integer('quantity')->default('1');
            $table->date('date_in_wh');
            $table->date('date_expiry');
            $table->date('created_at')->nullable();
            $table->date('updated_at')->nullable();
            $table->boolean('active')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
