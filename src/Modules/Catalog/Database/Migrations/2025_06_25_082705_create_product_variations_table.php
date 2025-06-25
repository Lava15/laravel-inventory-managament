<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_variations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('product_id')->constrained('products');
            $table->foreignUlid('parent_id')->nullable()->constrained('product_variations');
            $table->string('barcode')->nullable();
            $table->string('type');
            $table->string('sku')->unique();
            $table->unsignedBigInteger('cost')->default(0);
            $table->unsignedBigInteger('price')->default(0);
            $table->integer('quantity')->default(0);
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_default')->default(false);
            $table->integer('order')->default(999);
            $table->json('attributes')->nullable();
            $table->json('meta')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
      if (app()->isLocal()) {
          Schema::dropIfExists('product_variations');
      }
    }
};
