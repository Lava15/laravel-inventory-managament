<?php

namespace Tests\Feature\Livewire;

use App\Livewire\SwitchLanguage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SwitchLanguageTest extends TestCase
{
    public function test_renders_successfully()
    {
        Livewire::test(SwitchLanguage::class)
            ->assertStatus(200);
    }
}
