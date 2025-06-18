<?php

namespace Modules\Catalog\Test;

use Tests\TestCase;
use Modules\Catalog\Models\Category;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
  use RefreshDatabase;
  private function createCategory()
  {
    return Category::query()->create([
      'is_active' => true,
    ]);
  }

  #[Test]
  public function it_can_create_a_category()
  {
    $category = $this->createCategory();
    $this->assertDatabaseHas('categories', [
      'id' => $category->id,
    ]);
  }
  #[Test]
  public function it_can_soft_delete_a_category()
  {
    $category = $this->createCategory();
    $category->delete();
    $this->assertSoftDeleted('categories', [
      'id' => $category->id,
    ]);
    // public function it_restores_a_category_with_translations()
    // {
    //     $category = Category::factory()
    //         ->has(CategoryTranslation::factory(), 'translations')
    //         ->create();

    //     $category->delete();
    //     $category->restore();

    //     $this->assertDatabaseHas('categories', ['id' => $category->id]);
    //     $this->assertDatabaseHas('category_translations', [
    //         'category_id' => $category->id,
    //         'deleted_at' => null
    //     ]);
    // }

    // /** @test */
    // public function it_has_parent_child_relationship()
    // {
    //     $parent = Category::factory()->create();
    //     $child = Category::factory()->create(['parent_id' => $parent->id]);

    //     $this->assertEquals($parent->id, $child->parent->id);
    //     $this->assertTrue($parent->children->contains($child));
    // }

    // /** @test */
    // public function it_deletes_translations_when_force_deleted()
    // {
    //     $category = Category::factory()
    //         ->has(CategoryTranslation::factory()->count(3), 'translations')
    //         ->create();

    //     $category->forceDelete();

    //     $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    //     $this->assertDatabaseMissing('category_translations', ['category_id' => $category->id]);
    // }

    // /** @test */
    // public function it_handles_position_default_value()
    // {
    //     $category = Category::factory()->create(['position' => null]);
    //     $this->assertEquals(0, $category->fresh()->position);
    // }
  }
}
