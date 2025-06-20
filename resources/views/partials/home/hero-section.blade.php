<section class="flex flex-col md:flex-row items-center justify-between p-8 max-w-7xl w-full">
  <!-- Left Block -->
  <div class="md:w-1/2 justify-center space-y-6 text-center md:text-left">
    <h1 class="text-4xl md:text-5xl font-bold text-gray-800"> <span>{{ __('pages/home.my') }}</span> <span
        class="text-red-500 mx-2">❤️</span>
      <span>{{ __('pages/home.craft') }}</span>
    </h1>
    <p class="text-xl text-gray-700">
      {{ __('pages/home.sell_and_buy_goods') }}
    </p>
    <p class="text-3xl font-semibold text-[#7a5c3e] italic">
      {{ __('pages/home.opening_soon') }}
    </p>
    <button
      class="uppercase mt-4 w-1/2 pointer px-6 py-3 bg-green-700 text-white text-lg rounded-lg hover:bg-green-800 transition">
      {{ __('pages/home.to_be_seller') }}
    </button>
  </div>
  <!-- Right Block -->
  <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
    <img src="{{  asset('assets/images/home_hero-section-right.png') }}" alt="Handmade Goods" class="md:h-130" />
  </div>
</section>
