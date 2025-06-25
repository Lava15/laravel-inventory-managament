<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('product_translations', function (Blueprint $table) {
      $table->ulid('id')->primary();
      $table->foreignUlid('product_id')->constrained();
      $table->string('name');
      $table->text('description');
      $table->string('locale', 10);
      $table->string('slug');
      $table->string('meta_title')->nullable();
      $table->text('meta_description')->nullable();
      $table->unique(['product_id', 'locale']);
      $table->unique(['locale', 'slug']);
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    if (app()->isLocal()) {
      Schema::dropIfExists('product_translations');
    }
  }
};
