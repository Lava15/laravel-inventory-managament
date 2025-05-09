<?php

declare(strict_types=1);

namespace Modules\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Moduels\Product\Models\Product;

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
