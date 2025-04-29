<?php

namespace Modules\Catalog\Test;

use Tests\TestCase;

class CategoryTest extends TestCase
{
    /** @test */
    public function check_category_index_route(): void
    {
        $response = $this->get(route('category:index'));
        $response->assertStatus(200);
    }
}
