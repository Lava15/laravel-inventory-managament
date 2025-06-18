<?php

namespace Modules\Catalog\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Catalog\Models\Category;
use Modules\Catalog\Models\CategoryTranslation;

class CategorySeeder extends Seeder
{
  public function run(): void
  {
    $categories = [
      [
        'name' => 'Electronics',
        'position' => 1,
        'is_active' => true,
        'is_featured' => true,
        'image' => 'category1.jpg',
        'translations' => [
          'uz' => ['name' => 'Elektronika', 'slug' => 'elektronika', 'description' => 'Elektronika toifasi'],
          'ru' => ['name' => 'Электроника', 'slug' => 'elektronika', 'description' => 'Категория электроника'],
          'en' => ['name' => 'Electronics', 'slug' => 'electronics', 'description' => 'Electronics category'],
        ],
      ],
      [
        'name' => 'Books',
        'position' => 2,
        'is_active' => true,
        'is_featured' => false,
        'image' => 'category2.jpg',
        'translations' => [
          'uz' => ['name' => 'Kitoblar', 'slug' => 'kitoblar', 'description' => 'Kitoblar toifasi'],
          'ru' => ['name' => 'Книги', 'slug' => 'knigi', 'description' => 'Категория книг'],
          'en' => ['name' => 'Books', 'slug' => 'books', 'description' => 'Books category'],
        ],
      ],
      [
        'name' => 'Clothing',
        'position' => 3,
        'is_active' => true,
        'is_featured' => true,
        'image' => 'category3.jpg',
        'translations' => [
          'uz' => ['name' => 'Kiyimlar', 'slug' => 'kiyimlar', 'description' => 'Kiyimlar toifasi'],
          'ru' => ['name' => 'Одежда', 'slug' => 'odezhda', 'description' => 'Категория одежды'],
          'en' => ['name' => 'Clothing', 'slug' => 'clothing', 'description' => 'Clothing category'],
        ],
      ],
      [
        'name' => 'Toys',
        'position' => 4,
        'is_active' => true,
        'is_featured' => false,
        'image' => 'category4.jpg',
        'translations' => [
          'uz' => ['name' => 'Oʻyinchoqlar', 'slug' => 'oyinchoqlar', 'description' => 'Oʻyinchoqlar toifasi'],
          'ru' => ['name' => 'Игрушки', 'slug' => 'igrushki', 'description' => 'Категория игрушек'],
          'en' => ['name' => 'Toys', 'slug' => 'toys', 'description' => 'Toys category'],
        ],
      ],
      [
        'name' => 'Sports',
        'position' => 5,
        'is_active' => true,
        'is_featured' => true,
        'image' => 'category5.jpg',
        'translations' => [
          'uz' => ['name' => 'Sport', 'slug' => 'sport', 'description' => 'Sport toifasi'],
          'ru' => ['name' => 'Спорт', 'slug' => 'sport', 'description' => 'Категория спорта'],
          'en' => ['name' => 'Sports', 'slug' => 'sports', 'description' => 'Sports category'],
        ],
      ],
    ];

    foreach ($categories as $categoryData) {
      $category = Category::create([
        'name' => $categoryData['name'],
        'parent_id' => null,
        'position' => $categoryData['position'],
        'is_active' => $categoryData['is_active'],
        'is_featured' => $categoryData['is_featured'],
        'image' => $categoryData['image'],
      ]);

      foreach ($categoryData['translations'] as $locale => $translation) {
        CategoryTranslation::create([
          'category_id' => $category->id,
          'locale' => $locale,
          'name' => $translation['name'],
          'slug' => $translation['slug'],
          'description' => $translation['description'],
        ]);
      }
    }
  }
}
