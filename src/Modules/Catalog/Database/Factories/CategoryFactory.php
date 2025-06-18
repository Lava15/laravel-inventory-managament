<?php

declare(strict_types=1);

namespace Modules\Catalog\Database\Factories;

use Modules\Catalog\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

final class CategoryFactory extends Factory
{
    protected $model = Category::class;
    public function definition(): array
    {
        return [
            'id' => fake()->ulid, 
            'name' => fake()->word,
            'description' => fake()->sentence,
            'is_active' => fake()->boolean,
        ];
    }
}
