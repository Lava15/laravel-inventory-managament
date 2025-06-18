<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('products', function (Blueprint $table) {
      $table->ulid('id')->primary();
      $table->string('name');
      $table->string('description');
      $table->string('slug')->unique();
      $table->string('status');
      $table->unsignedBigInteger('price');
      $table->integer('order')->default(999);
      $table->boolean('is_active');
      $table->boolean('is_featured')->default(false);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    if (app()->isLocal()) {
      Schema::dropIfExists('products');
    }
  }
};
