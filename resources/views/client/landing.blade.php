<x-layout.client-layout>

    <div class="relative flex flex-col text-center justify-center w-full -mt-16 h-[calc(100vh-110px)] mb-14 
            bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('assets/images/graduatesBG.jpg') }});">
        <div class="absolute inset-0 bg-black opacity-50"></div> 
       <div class="z-40"> 
        
        <h1 class="text-5xl font-bold title-font mb-4 text-gray-50 ">
        Welcome Home, Alumni <br>
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
</x-layout.client-layout>