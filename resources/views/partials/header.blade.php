<header class="fixed top-0 w-full bg-green-800 text-white p-4">
  <div class=" mx-auto flex justify-around items-center">
    <div class="flex justify-between gap-4 items-center">
      <a href="{{ route('home') }}" class="text-3xl font-bold">
        <img class="bg-red-50 w-24 rounded-xl" src="{{ asset('assets/images/logo.png') }}" alt="">
      </a>
        <button @click="openCatalog = !openCatalog"  class="cursor-pointer flex items-center justify-between gap-2 border border-gray-300 rounded-md px-4 py-2 text-lg font-semibold">
          <svg x-show="!openCatalog" class="w-5 h-5 text-green-900" fill="none" stroke="#fff" stroke-width="2" viewbox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
          </svg>
        <svg x-show="openCatalog" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
        <span>Katalog</span>
        </button>
      <ul class="flex space-x-4">
        {{-- <li>
          <a href="{{  route('home') }}"
            class="{{ isActiveNavLink('home') }} hover:text-gray-300">{{ __('pages/home.title') }}</a>
        </li>
        <li>
          <a href="{{  route('products:index') }}"
            class="{{ isActiveNavLink('products:index') }} hover:text-gray-300">{{ __('pages/home.show_all_products') }}</a>
        </li> --}}
      </ul>
    </div>
    <nav>
      <ul class="flex space-x-4">
        <li>
          <livewire:switch-language />
        </li>
        <li>
          <a href="#section2" class="hover:text-gray-300">Sign in</a>
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
        </li>
      </ul>
    </nav>
  </div>
</header>
<div class="w-full" x-show="openCatalog"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-2"
>
  @include('partials.catalog')
</div>
