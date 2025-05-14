<x-layout.client-layout>
    <div class="w-full flex flex-col items-center justify-center max-w-screen-xl px-6 py-12 mx-auto">
        <x-client-components.client-page-header title="Your Alumni Help Center"
            body="Browse our FAQs for instant solutions or contact the Alumni Office for more detailed assistance." />
        <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-3 px-2">
            <div class="space-y-2 w-full">
                <x-client-components.client-faq />
            </div>
            <div class="space-y-2 w-full">
                <x-client-components.client-faq />
            </div>
        </div>

    </div>



    <div class="group fixed bottom-10 right-10 flex items-center space-x-3">
        <!-- Chat bubble -->
        <div
            class="relative max-w-xs bg-gray-800 text-white text-sm px-4 py-2 rounded-xl shadow-lg opacity-0 group-hover:opacity-100 transition-opacity">
            Chat with us!
            <div class="absolute right-[-6px] top-1/2 -translate-y-1/2 w-0 h-0 
                        border-y-8 border-y-transparent 
                        border-l-8 border-l-gray-800">
            </div>
        </div>

        <!-- Chat button -->
        <button class="chat-toggle bg-gray-800 p-4 rounded-full shadow-lg ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-white">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
            </svg>
        </button>
    </div>

    <div
        class="chat-box fixed hidden w-full h-[calc(100%-64px)] bottom-0 right-0 sm:right-10 sm:h-[500px] sm:w-[350px] border  bg-gray-50 flex flex-col sm:rounded-t-xl shadow-lg ">
        <!-- Chat Header -->
        <div class="border-b text-gray-900  py-2 px-4 text-md font-bold sm:font-semibold flex items-center justify-between">
            <span>Chat with Us!</span>
            <button class="close-chat p-1 hover:bg-gray-200 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Chat Messages -->
        <div class=" flex-1 overflow-y-auto scrollbar p-2 mx-3 mr-1 space-y-1  text-sm">
            <x-client-components.client-chat-bubble name='Admin' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
            <x-client-components.client-chat-bubble name='You' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
            <x-client-components.client-chat-bubble name='Admin' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
            <x-client-components.client-chat-bubble name='You' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
            <x-client-components.client-chat-bubble name='You' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
            <x-client-components.client-chat-bubble name='You' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
            <x-client-components.client-chat-bubble name='You' time='11:03'
                message="That's awesome. I think our users will really appreciate the improvements." />
        </div>

        <!-- Message Input -->
        <div class="flex items-center border m-2 border-gray-300 rounded-lg px-3 py-2   ">
            <textarea placeholder="Type a message..."
                class="appearance-none flex-1 outline-none text-gray-700 bg-transparent placeholder:text-gray-700 text-sm resize-none overflow-hidden overflow-y-scroll scrollbar  min-h-[40px] max-h-[300px] leading-snug"></textarea>
            <button>
                <!-- Paper plane icon from Heroicons -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-5 w-5 text-gray-500 hover:text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                </svg>
            </button>
        </div>



    </div>










    @push('scripts')
    <script src="{{ asset('assets/js/client-faq.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Toggle chat box when the chat button is clicked
            $(".chat-toggle").click(function () {
                $(".chat-box").toggleClass("hidden");
            });

            // Close the chat when the close button is clicked
            $(".close-chat").click(function () {
                $(".chat-box").addClass("hidden");
            });
        });
    </script>
    @endpush

</x-layout.client-layout>