<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Modules\Catalog\Database\Seeders\CategorySeeder;

final class DatabaseSeeder extends Seeder
{
  public function run(): void
  {
    if (app()->isLocal()) {
      $this->call(class: [
        CategorySeeder::class,
      ]);
      User::query()->updateOrCreate(
        [
          'name' => 'admin',
          'email' => 'admin@admin.com',
          'password' => Hash::make('password'),
        ]
      );
    }
  }
}
