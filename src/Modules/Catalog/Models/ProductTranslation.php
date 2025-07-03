<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Shared\Enums\LanguageEnums;
use Moduels\Catalog\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

final class ProductTranslation extends Model
{
  //
  use SoftDeletes;
  use HasUlids;

  protected $fillable = [
    'product_id',
    'name',
    'description',
    'locale',
    'slug',
    'meta_title',
    'meta_description',
  ];
  protected function casts(): array
  {
    return [
      'locale' => LanguageEnums::class,
    ];
  }
  public function product()
  {
    return $this->belongsTo(Product::class, 'product_id');
  }
}
