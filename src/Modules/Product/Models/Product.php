<?php

declare(strict_types=1);

namespace Moduels\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Product\Database\Factories\ProductFactory;

final class Product extends Model
{
    use HasFactory;
    protected $fillable = [];

    protected static function newFactory(): ProductFactory
    {
      return ProductFactory::new();
    }
}
