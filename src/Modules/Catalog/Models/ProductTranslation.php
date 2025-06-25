<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class ProductTranslation extends Model
{
    //
    use SoftDeletes;
    use HasUlids;

    protected $fillable = [];
  protected function casts(): array
  {
    return [];
  }
}
