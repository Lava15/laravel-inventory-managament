<?php

declare(strict_types=1);

namespace Modules\Product\Tests;

use Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

class ProductTest extends TestCase
{
  #[Test]
  public function check_products_index_route(): void
  {
    $response = $this->get(route('products:index'));

    $response->assertStatus(200);
    $response->assertSee('Products');
  }
}
