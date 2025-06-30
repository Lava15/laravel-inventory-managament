<div class="fixed bottom-0 w-full bg-white border-t border-gray-200 shadow-sm z-50 md:hidden">
	<div class="flex w-full justify-around text-center text-xs text-gray-500">
		{{-- Bosh sahifa (active) --}}
		<a href="#" class="flex flex-col items-center justify-center py-2 text-green-600">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewbox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v12m0 0l3-3m-3 3l-3-3m9 3a9 9 0 11-18 0 9 9 0 0118 0z"/>
			</svg>
			<span class="text-[13px] font-medium">Bosh sahifa</span>
		</a>

		{{-- Katalog --}}
		<a @click="openCatalog = !openCatalog" href="#" class="flex flex-col items-center justify-center py-2">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewbox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4h13M8 9h13M8 14h13M8 19h13M3 4h.01M3 9h.01M3 14h.01M3 19h.01"/>
			</svg>
			<span class="text-[13px]">Katalog</span>
		</a>
		<div class="w-full" x-show="openCatalog" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-2">
			@include('partials.catalog')
		</div>
		{{-- Savat --}}
		<a href="#" class="flex flex-col items-center justify-center py-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
          </svg>
			<span class="text-[13px]">Savat</span>
		</a>

		{{-- Saralangan --}}
		<a href="#" class="flex flex-col items-center justify-center py-2">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewbox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
			</svg>
			<span class="text-[13px]">Saralangan</span>
		</a>

		{{-- Kabinet --}}
		<a href="#" class="flex flex-col items-center justify-center py-2">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewbox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.953 9.953 0 0112 15c2.485 0 4.755.91 6.879 2.404M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
			</svg>
			<span class="text-[13px]">
        Kirish
      </span>
		</a>
	</div>
</div>

