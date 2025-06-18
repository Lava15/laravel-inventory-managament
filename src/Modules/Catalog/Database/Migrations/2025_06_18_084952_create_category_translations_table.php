<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('category_translations', function (Blueprint $table) {
      $table->ulid('id')->primary();
      $table->foreignUlid('category_id')->constrained();
      $table->string('slug');
      $table->string('locale')->index();
      $table->string('name');
      $table->text('description');
      $table->string('meta_title')->nullable();
      $table->string('meta_description')->nullable();
      $table->string('meta_robots')->default('index, follow');
      $table->string('meta_canonical')->nullable();
      $table->string('meta_image')->nullable();
      $table->unique(['slug', 'locale'], 'slug_locale_unique');
      $table->unique(['category_id', 'locale'], 'category_locale_unique');
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    if (app()->isLocal()) {
      Schema::dropIfExists('category_translations');
    }
  }
};
