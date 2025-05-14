<x-layout.client-layout>
  <div class="w-full flex flex-col items-center justify-center max-w-screen-xl px-6 py-12 mx-auto">

    <x-client-components.client-page-header title="Your Official Alumni ID"
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


    {{-- <div class="max-w-4xl mx-auto mt-6 p-8 bg-white dark:bg-gray-800 rounded-2xl border">
      <div class="flex flex-col md:flex-row items-center justify-between">

        <!-- Alumni Photo -->
        <div class="flex flex-col items-center mb-8 md:mb-0">
          <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Alumni Photo"
            class="w-36 h-36 rounded-full object-cover border-4 border-[#273461] mb-4">
          <p class="text-xs text-gray-500 dark:text-gray-400">Alumni</p>
        </div>

        <!-- Info Section -->
        <div class="text-center md:text-left md:flex-1 px-6">
          <h2 class="text-2xl font-bold text-[#273461] dark:text-[#5a7eff]">BINI TINE CRUZ</h2>
          <p class="text-lg text-gray-600 dark:text-gray-400 mt-2">Alumni ID: 2023-0001</p>
          <p class="text-lg text-gray-600 dark:text-gray-400">BS Information Technology</p>
          <p class="text-lg text-gray-600 dark:text-gray-400">Class of 2023</p>
          <p class="text-sm text-gray-500 dark:text-gray-400 mt-4">Issued by: BTECH Alumni Office</p>
        </div>

        <!-- QR Code -->
        <div class="mt-8 md:mt-0">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=JaneDoe-2023-0001" alt="QR Code"
            class="w-36 h-36">
        </div>

      </div>
    </div> --}}

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