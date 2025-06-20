<div x-data="searchFilter()" class="w-full max-w-6xl mx-auto px-4">
	<div class="flex items-center justify-between md:hidden gap-2 bg-white shadow-md px-4 py-2">
		<div class="flex items-center gap-2 flex-1">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-900">
				<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
			</svg>

			<input type="text" placeholder="Mahsulot izlash" x-model="search" class="w-full focus:outline-none text-green-900 placeholder-green-900 bg-transparent"/>
		</div>
		<button @click="mobileFiltersOpen = !mobileFiltersOpen" class="w-10 h-10 flex items-center justify-center rounded-full bg-white shadow-md border border-gray-100">
			<svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16"/>
			</svg>
		</button>
	</div>

	<!-- Mobile Filters Dropdown -->
	<div x-show="mobileFiltersOpen" class="md:hidden mt-2 bg-white rounded-lg shadow p-4" x-transition>
		<div class="mb-3">
			<label class="block text-sm font-medium text-gray-700 mb-1">Region</label>
			<select x-model="selectedRegion" class="w-full border border-gray-300 rounded-md p-2">
				<option value="">All regions</option>
				<template x-for="region in regions" :key="region">
					<option x-text="region" :value="region"></option>
				</template>
			</select>
		</div>
		<div class="mb-3">
			<label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
			<select x-model="selectedCategory" class="w-full border border-gray-300 rounded-md p-2">
				<option value="">All categories</option>
				<template x-for="category in categories" :key="category">
					<option x-text="category" :value="category"></option>
				</template>
			</select>
		</div>
		<button @click="clearFilters()" class="text-sm text-green-900 underline mt-2">Clear search</button>
	</div>

	<!-- Desktop View -->
	<div
		class="hidden md:flex items-center gap-4 bg-white rounded-md shadow-md px-6 py-3 mt-4">
		<!-- Category Filter -->
		<div class="relative" @click.outside="categoryOpen = false">
			<div @click="categoryOpen = !categoryOpen" class="flex items-center gap-2 cursor-pointer">
				<svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
				</svg>
				<span class="text-green-900" x-text="selectedCategory || 'All categories'"></span>
				<svg class="w-4 h-4 text-green-900" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
				</svg>
			</div>
			<div x-show="categoryOpen" class="absolute mt-2 bg-white shadow rounded-lg w-48 py-2 z-20" x-transition>
				<template x-for="category in categories" :key="category">
					<div @click="selectedCategory = category; categoryOpen = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer" x-text="category"></div>
				</template>
			</div>
		</div>
		<!-- Divider -->
		<div class="h-6 w-px bg-gray-200"></div>
		<!-- Search Input -->
		<div class="flex items-center gap-2 flex-1">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-green-900">
				<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"/>
			</svg>

			<input type="text" placeholder="Mahsulot izlash" x-model="search" class="ml-10 w-full focus:outline-none text-green-900 placeholder-green-900 bg-transparent"/>
		</div>

		<!-- Divider -->
		<div class="h-6 w-px bg-gray-200"></div>
		<!-- Region Filter -->
		<div class="relative" @click.outside="regionOpen = false">
			<div @click="regionOpen = !regionOpen" class="flex items-center gap-2 cursor-pointer">
				<svg class="w-5 h-5 text-green-900" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/>
				</svg>
				<span class="text-green-900" x-text="selectedRegion || 'All regions'"></span>
				<svg class="w-4 h-4 text-green-900" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
				</svg>
			</div>
			<div x-show="regionOpen" class="absolute mt-2 bg-white shadow rounded-lg w-48 py-2 z-20" x-transition>
				<template x-for="region in regions" :key="region">
					<div @click="selectedRegion = region; regionOpen = false" class="px-4 py-2 hover:bg-gray-100 cursor-pointer" x-text="region"></div>
				</template>
			</div>
		</div>

		<!-- Divider -->
		<div class="h-6 w-px bg-gray-200"></div>

		<!-- Clear Search -->
		<div class="flex items-center gap-2 text-green-900 cursor-pointer" @click="clearFilters()">
			<svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" d="M4 4l16 16M4 20L20 4"/>
			</svg>
			<span>Clear search</span>
		</div>
	</div>
</div>

<script>
	function searchFilter() {
return {
search: '',
mobileFiltersOpen: false,
regionOpen: false,
categoryOpen: false,
regions: [
'North', 'South', 'East', 'West'
],
categories: [
'Real Estate', 'Jobs', 'Services', 'Events'
],
selectedRegion: '',
selectedCategory: '',
clearFilters() {
this.search = '';
this.selectedRegion = '';
this.selectedCategory = '';
}
}
}
</script>

