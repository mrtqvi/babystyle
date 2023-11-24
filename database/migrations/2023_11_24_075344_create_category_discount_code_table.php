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
        Schema::create('category_discount_code', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('discount_code_id')->constrained('discount_codes');
            $table->primary(['category_id', 'discount_code_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_discount_code');
    }
};
