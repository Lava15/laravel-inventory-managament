<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('product_variation_translations', function (Blueprint $table) {
      $table->ulid('id')->primary();
      $table->foreignUlid('product_variation_id')->constrained();
      $table->string('locale', 10);
      $table->string('name');
      $table->unique(['product_variation_id', 'locale']);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    if (app()->isLocal()) {
      Schema::dropIfExists('product_variation_translations');
    }
  }
};
