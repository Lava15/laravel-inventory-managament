<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Shared\Enums\LanguageEnums;

class SwitchLanguage extends Component
{
  public function switch($language): void
  {
    $validated = Validator::make(
      ['language' => $language],
      ['language' => Rule::in(LanguageEnums::values())]
    )->validate();
    $locale = $validated['language'];
    app()->setLocale($locale);
    session(['locale' => $locale]);
    $this->redirect('/');
  }
  public function render()
  {
    return view('livewire.switch-language');
  }
}
