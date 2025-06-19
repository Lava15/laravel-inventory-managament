<?php

namespace Modules\Catalog\Test;

use Tests\TestCase;
use Modules\Catalog\Models\Category;
use PHPUnit\Framework\Attributes\Test;
use Shared\Enums\LanguageEnums;

class CategoryTest extends TestCase
{
  private function createCategory()
  {
    return Category::query()->create([
      'name' => 'Test Category',
      'is_active' => true,
    ]);
  }

  #[Test]
  public function it_can_create_a_category()
  {
    $category = $this->createCategory();
    $this->assertDatabaseHas('categories', [
      'name' => $category->name,
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
  }
  #[Test]
  public function it_restores_a_category_with_translations()
  {
    $category = $this->createCategory();
    $category->translations()->create([
      'slug' => 'test-category',
      'locale' => LanguageEnums::En,
      'name' => 'Test Category',
      'description' => 'This is a test category.',
    ]);
    $category->delete();
    $category->restore();

    $this->assertDatabaseHas('categories', ['id' => $category->id]);
    $this->assertDatabaseHas('category_translations', [
      'category_id' => $category->id,
      'deleted_at' => null
    ]);
  }

  #[Test]
  public function it_has_parent_child_relationship()
  {
    $parent = $this->createCategory();
    $child = Category::query()->create([
      'name' => 'Child Category',
      'is_active' => true,
      'parent_id' => $parent->id,
    ]);

    $this->assertEquals($parent->id, $child->parent->id);
    $this->assertTrue($parent->children->contains($child));
  }

  #[Test]
  public function it_deletes_translations_when_force_deleted()
  {
    $category = $this->createCategory();

    $category->forceDelete();

    $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    $this->assertDatabaseMissing('category_translations', ['category_id' => $category->id]);
  }

  #[Test]
  public function it_handles_position_default_value()
  {
    $category = $this->createCategory();
    $this->assertEquals(0, $category->fresh()->position);
  }
}
