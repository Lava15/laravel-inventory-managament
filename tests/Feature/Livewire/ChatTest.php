<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Chat;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ChatTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(Chat::class)
            ->assertStatus(200);
    }
}
