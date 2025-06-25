<?php

declare(strict_types=1);

namespace Moduels\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Catalog\Models\ProductVariation;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Catalog\Database\Factories\ProductFactory;

final class Product extends Model
{
  use HasFactory;
  use SoftDeletes;
  use HasUlids;

  protected $fillable = [];

  protected static function newFactory(): ProductFactory
  {
    return ProductFactory::new();
  }
  public function variatians(): HasMany
  {
    return $this->hasMany(related: ProductVariation::class, foreignKey: 'product_id');
  }
}
