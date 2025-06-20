<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Shared\Enums\LanguageEnums;

final class CategoryTranslation extends Model
{
  use SoftDeletes;
  use HasUlids;

  protected $fillable = [
    'slug',
    'category_id',
    'locale',
    'name',
    'description',
  ];
  protected function casts(): array
  {
    return [
      'locale' => LanguageEnums::class,
    ];
  }
  public function category(): BelongsTo
  {
    return $this->belongsTo(related: Category::class, foreignKey: 'category_id');
  }
}
