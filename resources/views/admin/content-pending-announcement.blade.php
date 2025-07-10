<x-layout.admin-layout pageTitle="Manage Content">

    <div class=" w-full flex justify-center pr-[300px] gap-8">
        <div class="flex flex-col w-[670px] mx-auto items-center pt-4 px-10 overflow-y-auto h-[calc(100vh-117px)] ">
            <x-admin-components.admin-announcement-header announcementHeader="Pending Announcement" />
            <!-- 2 -->
            <div class="flex flex-col gap-3 mb-6">
                {{-- Post = 4 --}}
                <div class="bg-white max-w-full p-4 rounded shadow">
                    <div class="flex items-center mb-2">
                        <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture"
                            class="h-10 min-w-10 rounded-full object-cover mr-2">
                        <div class="">
                            <div class="uppercase text-md text-gray-900">Bobson Latonio</div>
                            <p class="text-sm -mt-1 text-gray-600">20 min. ago</p>
                        </div>
                    </div>
                    <p class="mb-4 text-gray-800 text-sm">LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng
                        Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?</p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <img src="https://picsum.photos/500/500" class="rounded" />
                    </div>

                    <div class="w-full border-t  mt-4 border-gray-300"></div>
                    <div class="flex items-center justify-between gap-2 ">
                        <button
                            class="flex gap-1 text-green-700  w-1/2 justify-center hover:bg-green-200 rounded-lg transition duration-300 px-3 py-3 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-5">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>Accept</div>
                        </button>
                        <button
                            class="flex gap-1 w-1/2 text-red-700 justify-center hover:bg-red-200 rounded-lg transition duration-300 px-3 py-3 text-sm">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-5">
                                <path fill-rule="evenodd"
                                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>Delete</div>
                        </button>
                    </div>
                    <div class="w-full border-b border-gray-300"></div>
                </div>
                <div class="bg-white max-w-full p-4 rounded shadow">
                    <div class="flex items-center mb-2">
                        <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture"
                            class="h-10 min-w-10 rounded-full object-cover mr-2">
                        <div class="">
                            <div class="uppercase text-md text-gray-900">Bobson Latonio</div>
                            <p class="text-sm -mt-1 text-gray-600">20 min. ago</p>
                        </div>
                    </div>
                    <p class="mb-4 text-gray-800 text-sm">LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng
                        Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?</p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <img src="https://picsum.photos/500/500" class="rounded" />
                    </div>

                    <div class="w-full border-t  mt-4 border-gray-300"></div>
                    <div class="flex items-center justify-between gap-2 ">
                        <button
                            class="flex gap-1 text-green-700  w-1/2 justify-center hover:bg-green-200 rounded-lg transition duration-300 px-3 py-3 text-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-5">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>Accept</div>
                        </button>

                        <button
                            class="flex gap-1 w-1/2 text-red-700 justify-center hover:bg-red-200 rounded-lg transition duration-300 px-3 py-3 text-sm">

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="size-5">
                                <path fill-rule="evenodd"
                                    d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>Delete</div>
                        </button>
                    </div>
                    <div class="w-full border-b border-gray-300"></div>
                </div>
               



            </div>




        </div>
        <!-- right side -->
        <div
            class="flex flex-col fixed bottom-0 right-0 overflow-y-auto bg-white pt-5 pb-4 gap-1 px-5 w-[300px] h-[calc(100vh-117px)]">
            <div class="w-full">
                <div class="flex justify-between items-center text-gray-600 mb-2">
                    <p class="text-sm font-semibold ">Schedule Deletion</p>
                    <a href="" class="mr-1 text-sm text-blue-600 hover:underline">
                        See all
                    </a>

                </div>
                <!-- deletion schedule container-->
                <div class="flex flex-col gap-1">
                    
                    <a href="" class="h-20 flex text-xs items-center border-gray-200 border p-2 rounded-lg">
                        <img alt="annoucement-image"
                            class="w-16 h-16 bg-gray-100 object-cover object-center rounded-md flex-shrink-0 mr-3"
                            src="{{ asset('assets/images/SampleAnnounImage.jpg') }}">
                        <div class="flex-grow">
                            <div class="text-gray-500 line-clamp-1 uppercase">JUan dela cruz</div>
                            <div class="text-gray-900 font-medium line-clamp-2">body here</div>
                            <div class="text-red-500">2 mins remaining</div>
                        </div>
                    </a>

                    {{-- insert here...--}}
                </div>
            </div>
            <div class="border-t-[1.5px] my-2 mt-3"></div>
            <div class="w-full">
                <div class="flex justify-between text-gray-600 mb-2">
                    <p class="text-sm font-semibold ">Published post</p>
                    <a href="{{ route('admin-announcement') }}" class="mr-1 text-sm text-blue-600 hover:underline">
                        See all
                    </a>
                </div>
                <!-- officer container preview -->
                <div class="flex flex-col gap-1">
                    <a href="" class="h-20 flex text-xs items-center border-gray-200 border p-2 rounded-lg">
                        <img alt="annoucement-image"
                            class="w-16 h-16 bg-gray-100 object-cover object-center rounded-md flex-shrink-0 mr-3"
                            src="{{ asset('assets/images/SampleAnnounImage.jpg') }}">
                        <div class="flex-grow">
                            <div class="text-gray-500 line-clamp-1 uppercase">JUan dela cruz</div>
                            <div class="text-gray-900 font-medium line-clamp-2">body here</div>
                            <div class="text-blue-500">55 mins ago</div>
                        </div>
                    </a>


                    {{-- insert here...--}}

                </div>
            </div>



        </div>


    </div>

    @push('scripts')

    @endpush

</x-layout.admin-layout>