<x-layout.client-layout>


    <div class="relative flex flex-col text-center justify-center w-full lg:max-h-[600px] -mt-16 h-[calc(100vh-110px)] mb-14 
            bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('assets/images/graduatesBG.jpg') }});">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="z-40">

            <h1 class="text-5xl font-bold title-font mb-4 text-gray-50 ">
                Welcome Homes, Alumni <br>
            </h1>
            <p class="lg:w-[450px] mx-auto leading-relaxed text-gray-200 text-base ">
                Stay connected, share experiences, and collaborate with fellow alumni to inspire and grow together!
            </p>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black to-transparent z-0"></div>
        <div class="absolute flex flex-col items-center bottom-6 left-1/2 transform -translate-x-1/2">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-7 h-7 text-gray-100 animate-bounce">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
            </svg>
        </div>
    </div>

    {{-- Network - Feature Section --}}
    <div class="flex justify-center mb-14">
        <div class="flex flex-col md:flex-row  max-w-screen-xl">
            <div class="md:w-1/2 w-full  text-gray-950 flex items-center px-10 py-16">
                <div>
                    <p class="text-lg text-gray-400">We are creative team</p>
                    <h1 class="text-4xl md:text-5xl font-bold mt-4 leading-tight">
                        Innovative solutions to <br /> boost your projects
                    </h1>
                    <p class="text-gray-400 mt-6 max-w-md">
                        Lorem ipsum dolor sit amet consectetur adipiscing elitdo eiusmod tempor incididunt ut labore
                        dolore
                        magna utenim minim veniam nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <button
                        class="mt-8 bg-white text-[#0d1128] font-semibold px-6 py-3 rounded shadow hover:bg-gray-200">
                        View Services
                    </button>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/images/network-feature.jpg') }}" alt="Smiling Woman"
                    class="w-full h-full object-cover">
            </div>
        </div>
    </div>














</x-layout.client-layout>