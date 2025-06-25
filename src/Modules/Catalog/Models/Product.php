<?php

declare(strict_types=1);

namespace Moduels\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\Models\ProductVariation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Catalog\Models\ProductTranslation;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\Database\Factories\ProductFactory;

final class Product extends Model
{
  use HasFactory;
  use SoftDeletes;
  use HasUlids;

  protected $fillable = ['sku', 'base_price', 'order', 'is_active', 'is_featured'];
  protected function casts(): array
  {
    return [
      'base_price' => 'integer',
      'is_active' => 'boolean',
      'is_featured' => 'boolean',
      'order' => 'integer',
    ];
  }

  protected static function newFactory(): ProductFactory
  {
    return ProductFactory::new();
  }
  public function variatians(): HasMany
  {
    return $this->hasMany(related: ProductVariation::class, foreignKey: 'product_id');
  }
  public function translations(): HasMany
  {
    return $this->hasMany(related: ProductTranslation::class, foreignKey: 'product_id');
  }
}
