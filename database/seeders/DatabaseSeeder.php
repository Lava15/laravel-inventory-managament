<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Catalog\Database\Seeders\CategorySeeder;

final class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    if (app()->isLocal()) {
      $this->call([
        CategorySeeder::class,
      ]);
    }
  }
}
