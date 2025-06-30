@php
  use Shared\Enums\LanguageEnums;
@endphp
<div>
  <nav
    class="flex shadow overflow-x-auto items-center p-1 space-x-1 rtl:space-x-reverse text-sm text-gray-600 bg-gray-500/5 rounded-xl dark:bg-gray-500/20">
    <button wire:click="switch('uz')" role="tab" type="button" class="
            {{ config('app.locale') === LanguageEnums::Uz->value ? 'text-white border border-white' : 'text-gray-100' }}
            h-8 md:hover:bg-green-700/70 px-5 font-medium rounded-lg outline-none">
      @if (config('app.locale') === LanguageEnums::Uz->value)
      O'zbekcha
    @else
      O'z
    @endif
    </button>

    <button type="button" wire:click="switch('ru')"
      class=" {{ config('app.locale') === LanguageEnums::Ru->value ? 'text-white border border-white' : '' }} 
            h-8 md:hover:bg-green-700/70 px-5 font-medium rounded-lg outline-none hover:text-gray-800 dark:hover:text-gray-300 dark:focus:text-gray-400">
      @if (config('app.locale') === LanguageEnums::Ru->value)
      Русский
    @else
      <span class="text-white">Ру</span>
    @endif
    </button>
  </nav>
</div>
