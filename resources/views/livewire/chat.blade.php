<div x-data="{ open: false }" @click.away="open = false" class="relative">
<div class="flex">
  <button
      @click="open = !open"
      @keydown.escape.window="open = false"
      class="fixed bottom-20 lg:bottom-4 right-4 inline-flex items-center justify-center text-sm font-medium !bg-gray-800 disabled:pointer-events-none disabled:opacity-50 border rounded-full w-16 h-16   m-0 cursor-pointer border-gray-200  p-0 normal-case leading-5"
      type="button" aria-haspopup="dialog" aria-expanded="false" data-state="closed">
      <svg xmlns=" http://www.w3.org/2000/svg" width="30" height="40" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="block text-white border-gray-200 align-middle">
        <path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" class="border-gray-200">
        </path>
      </svg>
    </button>
</div>

   <div 
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-4"
   x-show="open" style="box-shadow: 0 0 #0000, 0 0 #0000, 0 1px 2px 0 rgb(0 0 0 / 0.05);"
    class="fixed bottom-[calc(4rem+1.5rem)] right-0 mr-4 bg-white rounded-lg border border-[#e5e7eb] w-[440px] h-[634px]">

    <!-- Heading -->
<div class="flex items-center border-b-4 p-4 border-blue-300 pb-4 mb-4">
    <div class="relative">
        <img class="h-12 w-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/women/87.jpg" alt="Avatar">
        <div class="absolute inset-0 rounded-full shadow-inner"></div>
    </div>
    <div class="ml-4">
        <h2 class="font-bold text-gray-800 text-lg">Jane Doe</h2>
        <p class="text-gray-600">Konsultant</p>
    </div>
</div>
    <!-- Chat Container -->
    <div class="pr-4 h-[474px] bg-blue-50/50 p-4">
      <!-- Chat Message AI -->
      <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1"><span
          class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
          <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black" stroke-width="1.5"
              viewBox="0 0 24 24" aria-hidden="true" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
              </path>
            </svg></div>
        </span>
        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Hi, how can I help you today?
        </p>
      </div>

      <!--  User Chat Message -->
      <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1"><span
          class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
          <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black" stroke-width="0"
              viewBox="0 0 16 16" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
              </path>
            </svg></div>
        </span>
        <p class="leading-relaxed"><span class="block font-bold text-gray-700">You </span>fewafef</p>
      </div>
      <!-- Ai Chat Message  -->
      <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1"><span
          class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
          <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black" stroke-width="1.5"
              viewBox="0 0 24 24" aria-hidden="true" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
              </path>
            </svg></div>
        </span>
        <p class="leading-relaxed"><span class="block font-bold text-gray-700">AI </span>Sorry, I couldn't find any
          information in the documentation about that. Expect answer to be less accurateI could not find the answer to
          this in the verified sources.</p>
      </div>
    </div>
    <!-- Input box  -->
    <div class="flex items-center pt-0">
      <form class="flex items-center justify-center w-full space-x-2">
        <input
          class="flex h-10 w-full rounded-md border border-[#e5e7eb] px-3 py-2 text-sm placeholder-[#6b7280] focus:outline-none focus:ring-2 focus:ring-blue-100 disabled:cursor-not-allowed disabled:opacity-50 text-[#030712] focus-visible:ring-offset-2"
          placeholder="Type your message" value="">
        <button
          class="inline-flex items-center justify-center rounded-md text-sm font-medium text-[#f9fafb] disabled:pointer-events-none disabled:opacity-50 bg-black hover:bg-[#111827E6] h-10 px-4 py-2">
          Send</button>
      </form>
    </div> 

  </div>
</div>
