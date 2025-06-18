<?php

namespace Modules\Catalog\Test;

use Tests\TestCase;
use Modules\Catalog\Models\Category;
use PHPUnit\Framework\Attributes\Test;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTranslationTest extends TestCase
{
    use RefreshDatabase;
//     public function it_creates_translation_for_category()
//     {
//         $category = Category::factory()->create();
//         $translation = CategoryTranslation::factory()->create([
//             'category_id' => $category->id,
//             'locale' => 'fr'
//         ]);

//         $this->assertDatabaseHas('category_translations', [
//             'slug' => $translation->slug,
//             'locale' => 'fr',
//             'category_id' => $category->id
//         ]);
//     }

//     /** @test */
//     public function slug_must_be_unique_per_locale()
//     {
//         CategoryTranslation::factory()->create([
//             'slug' => 'electronics',
//             'locale' => 'en'
//         ]);

//         $this->expectException(\Illuminate\Database\QueryException::class);

//         CategoryTranslation::factory()->create([
//             'slug' => 'electronics',
//             'locale' => 'en'
//         ]);
//     }

//     /** @test */
//     public function same_slug_can_exist_in_different_locales()
//     {
//         CategoryTranslation::factory()->create([
//             'slug' => 'electronics',
//             'locale' => 'en'
//         ]);

//         $translation = CategoryTranslation::factory()->create([
//             'slug' => 'electronics',
//             'locale' => 'fr'
//         ]);

//         $this->assertDatabaseHas('category_translations', [
//             'slug' => 'electronics',
//             'locale' => 'fr'
//         ]);
//     }

//     /** @test */
//     public function it_soft_deletes_translation()
//     {
//         $translation = CategoryTranslation::factory()->create();
//         $translation->delete();

//         $this->assertSoftDeleted($translation);
//     }

//     /** @test */
//     public function it_retrieves_correct_translation()
//     {
//         $category = Category::factory()
//             ->has(CategoryTranslation::factory(['locale' => 'en']), 'translations')
//             ->has(CategoryTranslation::factory(['locale' => 'fr']), 'translations')
//             ->create();

//         $enTranslation = $category->getTranslation('en');
//         $frTranslation = $category->getTranslation('fr');

//         $this->assertEquals('en', $enTranslation->locale);
//         $this->assertEquals('fr', $frTranslation->locale);
//         $this->assertNull($category->getTranslation('de'));
//     }

//     /** @test */
//     public function it_falls_back_to_default_locale()
//     {
//         config(['app.fallback_locale' => 'en']);
        
//         $category = Category::factory()
//             ->has(CategoryTranslation::factory(['locale' => 'en']), 'translations')
//             ->create();

//         $translation = $category->getTranslation('fr');

//         $this->assertEquals('en', $translation->locale);
//     }

//     /** @test */
//     public function it_requires_name_and_slug()
//     {
//         $this->expectException(\Illuminate\Database\QueryException::class);
        
//         CategoryTranslation::factory()->create([
//             'name' => null,
//             'slug' => null
//         ]);
//     }
}
