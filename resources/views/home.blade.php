<x-layouts.app :title=" __('pages/home.title') ">
	<img class="h-full" src="{{  asset('assets/images/hero_banner_desktop.png') }}" alt="">
	<section class="py-12 px-4">
		<h2 class="text-3xl font-bold text-green-700 mb-8 text-center">Our Products</h2>
		<!-- Filter Options -->
		<div class="flex justify-center mb-10 flex-wrap gap-4">
			@foreach($categories as $category)
        <a
          href="#" class="px-4 py-2 bg-green-100 text-green-700 rounded-md md:hover:bg-green-700/70 md:hover:text-white transition duration-300">
          {{ $category->translation()?->name }}
          (10)
        </a>
      @endforeach
		</div>

		<!-- Products Grid -->
		<div
			class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-24">
			<!-- Product Card -->
			<a href="#" class="bg-white rounded-2xl shadow p-6 flex flex-col items-center">
				<img src="{{  asset('assets/images/placeholder.webp') }}" alt="Product 1" class="h-64 mb-6 object-contain">
				<h3 class="text-2xl font-semibold mb-2 text-center">Product Name</h3>
				<p class="text-green-700 font-bold mb-4 text-lg">$00.00</p>
				<button class="px-6 py-3 bg-green-600 text-white rounded hover:bg-green-700/70 transition">View Details</button>
      </a>

			<a href="#" class="bg-white rounded-2xl shadow p-6 flex flex-col items-center">
				<img src="{{  asset('assets/images/placeholder.webp') }}" alt="Product 1" class="h-64 w-100 mb-6 object-contain">
				<h3 class="text-2xl font-semibold mb-2 text-center">Product Name</h3>
				<p class="text-green-700 font-bold mb-4 text-lg">$00.00</p>
				<button class="px-6 py-3 bg-green-600 text-white rounded hover:bg-green-700/70 transition">View Details</button>
      </a>
			<a href="#" class="bg-white rounded-2xl shadow p-6 flex flex-col items-center">
				<img src="{{  asset('assets/images/placeholder.webp') }}" alt="Product 1" class="h-64 mb-6 object-contain">
				<h3 class="text-2xl font-semibold mb-2 text-center">Product Name</h3>
				<p class="text-green-700 font-bold mb-4 text-lg">$00.00</p>
				<button class="px-6 py-3 bg-green-600 text-white rounded hover:bg-green-700/70 transition">View Details</button>
      </a>
		</div>
		<!-- Load all products-->
		<div class="flex justify-center mt-12">
			<a
				href="#" class="px-6 py-3 bg-green-600 text-white rounded-md rounded-md md:hover:bg-green-700/70 transition">{{ __('pages/home.show_all_products') }}
			</a>
		</div>
	</section>
	<livewire:chat/>
</x-layouts.app>

