<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\Database\Factories\CategoryFactory;

final class Category extends Model
{
  use HasFactory;
  protected $fillable = ['slug', 'name', 'description', 'is_active'];
  protected function casts(): array
  {
    return [
      'is_active' => 'boolean',
    ];
  }
  protected static function newFactory(): CategoryFactory
  {
    return CategoryFactory::new();
  }
}
