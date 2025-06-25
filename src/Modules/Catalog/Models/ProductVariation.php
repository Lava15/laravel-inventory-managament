<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Moduels\Catalog\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class ProductVariation extends Model
{
  use SoftDeletes;
  use HasUlids;

  protected $fillable = [];
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

  public function children(): \Illuminate\Database\Eloquent\Relations\HasMany
  {
    return $this->hasMany(ProductVariation::class, 'parent_id');
  }

  public function getRouteKeyName(): string
  {
    return 'slug';
  }
  // protected static function newFactory(): ProductVariationFactory
  // {
  //   return ProductVariationFactory::new();
  // }
}
