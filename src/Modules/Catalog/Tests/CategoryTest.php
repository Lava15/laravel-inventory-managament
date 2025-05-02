<?php

namespace Modules\Catalog\Test;

use Tests\TestCase;
use Modules\Catalog\Models\Category;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
  use RefreshDatabase;

  #[Test]
  public function check_category_index_route(): void
  {
    $response = $this->get(route('category:index'));
    $response->assertStatus(200);
  }
  #[Test]
  public function db_has_records(): void
  {
    Category::factory()->count(10)->create();
    $this->assertDatabaseCount('categories', 10);
  }
  // #[Test]
  // public function check_category_show_route(): void
  // {
  //   $response = $this->get(route('category:show', ['category' => '1']));
  //   $response->assertStatus(200);
  // }
  // #[Test]
  // public function check_category_create_route(): void
  // {
  //   $response = $this->get(route('category:create'));
  //   $response->assertStatus(200);
  // }
  // #[Test]
  // public function check_category_edit_route(): void
  // {
  //   $response = $this->get(route('category:edit', ['category' => '1']));
  //   $response->assertStatus(200);
  // }
}
