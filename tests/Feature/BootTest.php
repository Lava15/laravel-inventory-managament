<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class BootTest extends TestCase
{
  /**
   * Booting test to ensure the application is set up correctly.
   */
  #[Test]
  public function check_the_homepage_returns_a_successful_response(): void
  {
    $response = $this->get('/');

    $response->assertStatus(Response::HTTP_OK);
  }
  #[Test]
  public function check_the_warehouse_returns_a_successful_response(): void
  {
    $response = $this->get(route('filament.warehouse.auth.login'));

    $response->assertStatus(Response::HTTP_OK);
  }
}
