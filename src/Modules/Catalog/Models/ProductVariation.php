<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Modules\Catalog\Models\ProductVariationTranslation;
use Moduels\Catalog\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class ProductVariation extends Model
{
  use SoftDeletes;
  use HasUlids;

  protected $fillable = [
    'sku',
    'price',
    'cost',
    'quantity',
    'barcode',
    'type',
    'image',
    'attributes',
    'meta',
    'order',
    'is_active',
    'is_default',
    'parent_id',
    'product_id',
  ];
  protected function casts(): array
  {
    return [];
  }
  public function product(): BelongsTo
  {
    return $this->belongsTo(Product::class, 'product_id');
  }

  public function parent(): BelongsTo
  {
    return $this->belongsTo(ProductVariation::class, 'parent_id');
  }

  public function children(): HasMany
  {
    return $this->hasMany(ProductVariation::class, 'parent_id');
  }
  public function translations(): HasMany
  {
    return $this->hasMany(ProductVariationTranslation::class, 'product_variation_id');
  }
  // protected static function newFactory(): ProductVariationFactory
  // {
  //   return ProductVariationFactory::new();
  // }
}
