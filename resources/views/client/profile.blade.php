<x-layout.client-layout>
    <div class="max-w-screen-xl px-6 pb-12  mx-auto flex flex-col items-center">
        <div class="w-3/4">
            <div class="relative">
                <img src="{{ asset('assets/images/profile-bg.jpg') }}" alt="Cover"
                    class="w-full h-60 object-cover rounded-b-xl">

                {{-- black fade overlay from bottom to top --}}
                <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70 rounded-b-xl">
                </div>

                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <div class=" mb-4">
                        <div class="w-32 h-32 rounded-full border-2 border-gray-100 overflow-hidden">
                            <img src="{{ asset('assets/images/alumni-id-pic.jpeg') }}" alt="Zion Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold text-white uppercase">Rhon Harvey Lacsina</h1>
                </div>
            </div>
        </div>

        <div class="mt-2">
            <div class="text-sm text-gray-800">Your Post</div>

        </div>
    </div>
</x-layout.client-layout>