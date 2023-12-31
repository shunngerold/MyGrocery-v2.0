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
            $table->string('product_image')->nullable();
            $table->string('product_name');
            $table->string('uom');
            $table->string('category');
            $table->integer('price');
            $table->integer('stock');
            $table->string('description');
            $table->date('date_in_wh');
            $table->date('date_expiry');
            $table->boolean('active')->default('1');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
