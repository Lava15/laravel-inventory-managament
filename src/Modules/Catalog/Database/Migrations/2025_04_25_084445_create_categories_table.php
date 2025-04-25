<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique();
            $table->string('name');
            $table->text('description');
            $table->boolean('is_active');
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
