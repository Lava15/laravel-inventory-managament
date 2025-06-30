<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Shared\Enums\LanguageEnums;

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
}
