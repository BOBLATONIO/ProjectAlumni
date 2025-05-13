<x-layout.admin-layout pageTitle="Manage Questionnaire">
    <x-slot:headerTab>

        <button
            class="flex items-center gap-2 text-sm px-5 py-1.5 rounded-md border border-gray-400 bg-gray-100  text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Add Question
        </button>
        <button
            class="flex items-center gap-2 text-sm px-5 py-1.5 rounded-md bg-gray-800 border border-gray-800 text-gray-200">
            Publish
        </button>
    </x-slot:headerTab>

    <div class="w-auto flex m-4  gap-3">
        <div class="w-3/4">
            {{-- Title/Head --}}
            <div class="group flex mb-1 bg-gray-50 rounded-md border border-gray-200 justify-between items-center">
                <div class="flex items-center">
                    <div class="flex flex-col px-5 py-2 text-sm">
                        <div class="font-medium text-lg">BTECH TRACER STUDY</div>
                        <div class="text-sm">Pahayag ng Pahintulot: Sa pamamagitan ng dokumentong ito, ako ay
                            nagpapahintulot sa
                            Dalubhasaang Politekniko ng Lungsod ng Baliwag na mangolekta, magproseso, at gumamit ng mga
                            datos na nakasaad dito para sa iba pang layuning pang-akademiko. Nauunawaan ko na ang aking
                            personal na impormasyon ay pinoprotektahan ng RA 10173, Batas ng Privacy ng Datos ng 2012.
                        </div>
                    </div>
                </div>
                <div class="hidden group-hover:flex gap-3 pr-7">
                    <button class="text-blue-500 hover:underline text-sm">Edit</button>
                    <button class=" text-red-500 hover:underline text-sm">Delete</button>
                </div>
            </div>
            {{-- Question --}}
            <ul class="w-full sortable-list space-y-1">
                <li class="group flex bg-gray-50 rounded-md border border-gray-200 justify-between items-center">
                    <div class="flex items-center">
                        <div class="handle cursor-move w-6 rounded-l-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-gray-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M7 4a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm6-10a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col p-3 text-sm">
                            <div>Ano ang kasalukuyang kalagayan pagkatapos makapagtapos ng pag-aaral?
                            </div>
                            <div>Short answer</div>
                        </div>
                    </div>
                    <div class="hidden group-hover:flex gap-3 pr-7">
                        <button class="text-blue-500 hover:underline text-sm">Edit</button>
                        <button class=" text-red-500 hover:underline text-sm">Delete</button>
                    </div>
                </li>
                <li class="group flex bg-gray-50 rounded-md border border-gray-200 justify-between items-center">
                    <div class="flex items-center">
                        <div class="handle cursor-move w-6 rounded-l-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-gray-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M7 4a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm6-10a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col p-3 text-sm">
                            <div>Ano ang kasalukuyang kalagayan pagkatapos makapagtapos ng pag-aaral?
                            </div>
                            <div>Short answer</div>
                        </div>
                    </div>
                    <div class="hidden group-hover:flex gap-3 pr-7">
                        <button class="text-blue-500 hover:underline text-sm">Edit</button>
                        <button class=" text-red-500 hover:underline text-sm">Delete</button>
                    </div>
                </li>
                <li class="group flex bg-gray-50 rounded-md border border-gray-200 justify-between items-center">
                    <div class="flex items-center">
                        <div class="handle cursor-move w-6 rounded-l-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-gray-400"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M7 4a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm6-10a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col p-3 text-sm">
                            <div>Ano ang kasalukuyang kalagayan pagkatapos makapagtapos ng pag-aaral?
                            </div>
                            <div>Short answer</div>
                        </div>
                    </div>
                    <div class="hidden group-hover:flex gap-3 pr-7">
                        <button class="text-blue-500 hover:underline text-sm">Edit</button>
                        <button class=" text-red-500 hover:underline text-sm">Delete</button>
                    </div>
                </li>
                <!-- <li class="flex bg-gray-50 rounded-md border border-gray-200  ">
                    <div class=" handle cursor-move w-6 rounded-l-md    flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5  h-5 mt-1 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M7 4a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm6-10a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col  p-3 text-sm w-full">
                        {{-- when click it span becomes text input with a value of what is photosynthesis depends on
                        span
                        value for editing --}}
                        <span class=" ">Ano ang kasalukuyang kalagayan pagkatapos makapagtapos ng pag-aaral??</span>
                        <div class="">Short answer</div>
                    </div>
                    <div>
                        drop down for chossing type of question like multiple choice , paragraph, short anwer, dropdown etc
                    </div>
                </li> -->


                <!-- <li class="relative flex bg-gray-50 rounded-md border border-gray-200 justify-between items-center">
                    <div class="flex items-center">
                        <div class="handle cursor-move w-6 rounded-l-md flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M7 4a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm6-10a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2z" />
                            </svg>
                        </div>
                        <div class="flex flex-col p-3 text-sm">
                            <div>Ano ang kasalukuyang kalagayan pagkatapos makapagtapos ng pag-aaral?
                            </div>
                            <div>Short answer</div>
                        </div>
                    </div>
                    <button class="absolute right-4 top-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                </li> -->

                <!-- <li class="flex bg-gray-50 rounded-md border border-gray-200  ">
                    <div class=" handle cursor-move w-6 rounded-l-md    flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5  h-5 mt-1 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M7 4a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm6-10a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2zm0 5a1 1 0 100-2 1 1 0 000 2z" />
                        </svg>
                    </div>
                    <div class="flex flex-col p-3 text-sm w-full">
                        {{-- when click it span becomes text input with a value of what is photosynthesis depends on
                        span
                        value for editing --}}
                        <span class=" ">Ano ang kasalukuyang kalagayan pagkatapos makapagtapos ng pag-aaral??</span>
                        <select class="mt-1 border w-[25%] border-gray-300 rounded-md px-2 py-1 text-sm">
                            <option value="Short answer" selected>Short answer</option>
                            <option value="Paragraph">Paragraph</option>
                            <option value="Multiple choice">Multiple choice</option>
                            <option value="Dropdown">Dropdown</option>
                        </select>
                    </div>
                     <div>
                        drop down for chossing type of question like multiple choice , paragraph, short anwer, dropdown etc
                    </div>
                </li> -->



            </ul>
        </div>


        <div class="w-1/4 bg-gray-50 border rounded-lg p-3 ">
            <div class="flex justify-between text-gray-600 mb-2">
                <p class="text-md ">Group Question</p>
                <button class="mr-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>







    @push('scripts')
    <script>
        $(document).ready(function () {
            $('.sortable-list').each(function () {
                new Sortable(this, {
                    handle: '.handle', // handle's class
                    animation: 150
                });
            });
        });
    </script>
    @endpush


</x-layout.admin-layout>