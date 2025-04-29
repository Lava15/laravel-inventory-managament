<?php

declare(strict_types=1);

namespace Modules\Catalog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Category extends Model
{
    use HasFactory;
    protected $fillable = ['slug', 'name', 'description', 'is_active'];
    protected function casts(): array {
        return [
            'is_active' => 'boolean',
        ];
    }
}
