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
            $table->string('name');
            $table->foreignUlid('parent_id')->nullable()->constrained('product_variations')->nullOnDelete();
            $table->string('status');
            $table->integer('order')->default(999);
            $table->string('slug')->unique();
            $table->string('barcode')->nullable();
            $table->string('type');
            $table->string('sku')->unique();
            $table->decimal('price', 10, 2)->default(0.00);
            $table->decimal('cost', 10, 2)->default(0.00);
            $table->integer('quantity')->default(0);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_default')->default(false);
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
