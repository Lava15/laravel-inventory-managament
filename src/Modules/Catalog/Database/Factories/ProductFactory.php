<?php

declare(strict_types=1);

namespace Modules\Catalog\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Moduels\Catalog\Models\Product;

final class ProductFactory extends Factory
{
    protected $model = Product::class; 
    public function definition(): array
    {
        return [
            //
        ];
    }
}
