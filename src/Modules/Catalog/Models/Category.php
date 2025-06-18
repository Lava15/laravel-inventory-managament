<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Catalog\Models\CategoryTranslation;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\Database\Factories\CategoryFactory;

final class Category extends Model
{
  use HasFactory;
  use SoftDeletes;
  use HasUlids;

  protected $fillable = ['parent_id', 'position', 'is_active', 'is_featured', 'image'];
  protected function casts(): array
  {
    return [
      'is_active' => 'boolean',
      'is_featured' => 'boolean',
      'position' => 'integer',
      'parent_id' => 'ulid',
      'image' => 'string',
    ];
  }
  protected static function newFactory(): CategoryFactory
  {
    return CategoryFactory::new();
  }
  public function translations(): HasMany
  {
    return $this->hasMany(related: CategoryTranslation::class, foreignKey: 'category_id');
  }
  public function translation($locale = null): null|CategoryTranslation
  {
    if ($locale === null) {
      $locale = app()->getLocale();
    }
    return $this->translations->firstWhere('locale', $locale);
  }
}
