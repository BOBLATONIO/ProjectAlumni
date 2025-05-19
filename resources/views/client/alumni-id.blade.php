<x-layout.client-layout>
  <div class="w-full flex flex-col items-center justify-center max-w-screen-xl px-6 py-12 mx-auto">

    <x-client-components.client-page-header title="My Alumni ID"
      body="Enjoy the benefits of being part of our alumni community with your official Alumni ID your lifelong connection to the university." />

    <div class="sm:w-full mb-72 lg:mb-0 flex justify-center ">
      <div class=" sm:w-[600px] w-[900px] h-[300px] sm:h-[300px] flex  -rotate-90 sm:rotate-0">
        <div class="w-[380px] bg-gray-700 rounded-l-xl relative shadow-xl">
          {{-- <img class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 h-60 w-60"
            src="{{ asset('assets/images/btech-logo.png') }}" alt=""> --}}

          <div class="flex mt-4 ml-4 gap-2">
            <img class="h-20 w-20" src="{{ asset('assets/images/AlumniLogo.jpg') }}" alt="">
            <div class="flex flex-col -mt-2 justify-center">
              <div class="font-bold text-[#fcb92c] text-2xl">ALUMNI DIGITAL ID</div>
              <div class="-mt-1 text-white text-xs">SAMAHAN NG BTECH ALUMNI</div>
            </div>
          </div>
          <div class="ml-6 mt-4 ">
            <div class=" font-bold text-white text-lg">LACSINA, RHON HARVEY W.</div>
            <div class=" text-gray-100 text-sm">2024-20221123</div>
            <div class=" text-gray-100 text-sm">Bachelor of Science in Information Technology</div>
            <div class="  font-semibold text-gray-100 mt-6 text-lg">Batch 2024</div>
          </div>
          <img class="absolute right-5 bottom-5 mt-1 -ml-2 h-20 w-20" src="{{ asset('assets/images/qrcode.png') }}"
            alt="">
        </div>
        <img class="w-[220px] border-l-[5px] border-[#2a871d] bg-green-500 rounded-r-xl object-cover"
          src="{{ asset('assets/images/alumni-id-pic.jpeg') }}" alt="">
      </div>
    </div>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="grid gap-12 row-gap-8 lg:grid-cols-3">
        {{-- Start --}}
        <div class="flex">
          <div class="mr-4">
            <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-[#fcb92c]">
              <svg class="w-8 h-8 text-deep-purple-accent-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
          </div>
          <div>
            <h6 class="mb-2 font-semibold leading-5">Benifits 1</h6>
            <p class="text-sm text-gray-900">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
          </div>
        </div>
        {{-- End --}}
        {{-- Start --}}
        <div class="flex">
          <div class="mr-4">
            <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-[#fcb92c]">
              <svg class="w-8 h-8 text-deep-purple-accent-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
          </div>
          <div>
            <h6 class="mb-2 font-semibold leading-5">Benifits 2</h6>
            <p class="text-sm text-gray-900">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
          </div>
        </div>
        {{-- End --}}
        {{-- Start --}}
        <div class="flex">
          <div class="mr-4">
            <div class="flex items-center justify-center w-10 h-10 mb-3 rounded-full bg-[#fcb92c]">
              <svg class="w-8 h-8 text-deep-purple-accent-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
          </div>
          <div>
            <h6 class="mb-2 font-semibold leading-5">Benifits 3</h6>
            <p class="text-sm text-gray-900">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
          </div>
        </div>
        {{-- End --}}

      </div>
    </div>





    <div class="mt-10 sm:mt-6 text-center ">
      <p class="text-sm text-gray-600 dark:text-gray-400">
        Need help with your ID?
        <a href="{{ route('help-center') }}" class="text-blue-600 hover:underline">
          Contact admin here.
        </a>
      </p>
    </div>






  </div>


</x-layout.client-layout>