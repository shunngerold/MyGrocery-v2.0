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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('mobile_number');
            $table->string('house_no');
            $table->string('province');
            $table->string('city');
            $table->string('barangay');
            $table->string('label');
            $table->string('billing_type');
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
        Schema::dropIfExists('addresses');
    }
};
