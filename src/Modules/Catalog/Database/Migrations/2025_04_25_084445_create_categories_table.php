<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->ulid('id')->primary();
      $table->ulid('parent_id')->nullable();
      $table->unsignedMediumInteger('position')->default(0);
      $table->boolean('is_active')->default(false);
      $table->boolean('is_featured')->default(false);
      $table->string('image')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  public function down(): void
  {
    if (app()->isLocal()) {
      Schema::dropIfExists('categories');
    }
  }
};
