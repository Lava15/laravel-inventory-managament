<?php

declare(strict_types=1);

namespace Moduels\Catalog\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Catalog\Database\Factories\ProductFactory;

final class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [];

    protected static function newFactory(): ProductFactory
    {
      return ProductFactory::new();
    }
}
