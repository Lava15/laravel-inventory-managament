@php
    use Shared\Enums\LanguageEnums;
@endphp
<div>
    <nav
        class="flex shadow overflow-x-auto items-center p-1 space-x-1 rtl:space-x-reverse text-sm text-gray-600 bg-gray-500/5 rounded-xl dark:bg-gray-500/20">
        <button wire:click="switch('uz')" role="tab" type="button"
            class="
            {{ config('app.locale') === LanguageEnums::Uz->value ? 'text-white border border-white' : 'text-gray-100' }}
            h-8 md:hover:bg-green-700/70 px-5 font-medium rounded-lg outline-none focus:ring-2 focus:ring-blue-600 focus:ring-inset">
            O'zbekcha
        </button>

        <button type="button" wire:click="switch('ru')"
            class="
            {{ config('app.locale') === LanguageEnums::Ru->value ? 'text-white border border-white' : '' }} {{-- Use config --}}
            h-8 md:hover:bg-green-700/70 px-5 font-medium rounded-lg outline-none focus:ring-2 focus:ring-blue-600 focus:ring-inset hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-300 dark:focus:text-gray-400">
            Русский
        </button>
    </nav>
</div>
