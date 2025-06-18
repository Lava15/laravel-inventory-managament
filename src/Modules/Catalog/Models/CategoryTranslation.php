<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

final class CategoryTranslation extends Model
{
  use SoftDeletes;
  use HasUuids;

  protected $fillable = [
    'slug',
    'category_id',
    'locale',
    'name',
    'description',
  ];
}
