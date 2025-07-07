<x-layout.client-layout>
    <div class="max-w-screen-xl mx-auto flex min-h-screen relative">
        <!--Sidebar-->
        <aside
            class="hidden lg:block bg-white pt-4 w-72 shadow-md overflow-y-auto h-[calc(100vh-64px)] fixed left-0 top-16">
            <div class=" relative h-full  flex flex-col justify-between">
                <div class="">
                    <div class="flex flex-col text-md mt-2">
                        <a href="{{ route('your-post') }}"
                            class="flex items-center px-6 h-11 relative gap-2 cursor-pointer hover:bg-gray-100 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-8 min-w-8 rounded-full object-cover text-gray-800 dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path fill-rule="evenodd"
                                    d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="block  w-full">Your Post</div>
                        </a>
                        <a href="{{ route('alumni-id') }}"
                            class="flex items-center px-6 h-11 relative gap-2 cursor-pointer hover:bg-gray-100 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-8 min-w-8 rounded-full object-cover text-gray-800 dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path fill-rule="evenodd"
                                    d="M4.5 3.75a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V6.75a3 3 0 0 0-3-3h-15Zm4.125 3a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Zm-3.873 8.703a4.126 4.126 0 0 1 7.746 0 .75.75 0 0 1-.351.92 7.47 7.47 0 0 1-3.522.877 7.47 7.47 0 0 1-3.522-.877.75.75 0 0 1-.351-.92ZM15 8.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15ZM14.25 12a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H15a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3.75a.75.75 0 0 0 0-1.5H15Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="block w-full">My Alumni ID</div>
                        </a>
                        <a href="{{ route('donate-us') }}"
                            class="flex items-center px-6 h-11 relative gap-2 cursor-pointer hover:bg-gray-100 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-8 min-w-8 rounded-full object-cover text-gray-800  dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path
                                    d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                            </svg>

                            <div class="block  w-full">Donate Us</div>
                        </a>
                        <a href="{{ route('help-center') }}"
                            class="flex items-center px-6 h-11 relative gap-2 cursor-pointer hover:bg-gray-100 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-8 min-w-8 rounded-full object-cover text-gray-800 dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path fill-rule="evenodd"
                                    d="M4.804 21.644A6.707 6.707 0 0 0 6 21.75a6.721 6.721 0 0 0 3.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 0 1-.814 1.686.75.75 0 0 0 .44 1.223ZM8.25 10.875a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25ZM10.875 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div class="block  w-full">Help Center</div>
                        </a>



                    </div>

                    <div>
                        <h2 class="px-6 text-sm font-semibold mt-6 mb-3">Upcoming Events</h2>
                        <div class="mx-3 flex flex-col">
                            {{-- open modal post --}}
                            <a href="" class="px-3 rounded-md hover:bg-gray-100 py-2 flex items-center gap-2">
                                <img class="h-11 max-w-11  object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                    src="{{ asset('assets/images/SampleAnnounImage.jpg') }}" alt="Profile Picture">
                                <div class="text-sm max-900:hidden cursor-pointer">
                                    <!--max-900 is a custom css-->
                                    <div
                                        class="font-medium w-36 text-gray-700 dark:text-white overflow-hidden text-ellipsis whitespace-nowrap uppercase">
                                        Board Review</div>
                                    <div
                                        class="text-gray-500 dark:text-gray-200 text-xs w-36 overflow-hidden text-ellipsis whitespace-nowrap">
                                        Sat 16 June, 2025</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="px-6 text-xs text-gray-500 mt-8 pb-4">
                    © 2025 BTECH. All rights reserved.
                </div>
            </div>

        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-4 space-y-4 lg:ml-72 lg:mr-[288px] overflow-y-auto h-[calc(100vh-64px)] ml-0 mr-0">
            {{-- Post Box --}}
            <div class="w-full flex items-center bg-white rounded-md shadow p-4">
                <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile"
                    class="h-10 min-w-10 rounded-full object-cover mr-2">

                <div class="flex items-center w-full space-x-1">
                    <button class="flex-grow h-10 bg-gray-100 rounded-full px-4 outline-none text-start text-gray-400">
                        What's on your mind?
                    </button>

                    <button class="bg-gray-200 px-2 h-10 hidden sm:block rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </button>
                    <button class="bg-gray-200 px-2 h-10 hidden sm:block  rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                        </svg>

                    </button>
                    <button
                        class="bg-gray-700 text-gray-100 px-6 border-none h-10 rounded-full font-light">Post</button>
                </div>
            </div>

            {{-- Post = 1 (document) --}}
            <div class="bg-white max-w-full p-4 rounded shadow">
                <div class="flex items-center mb-2">
                    <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture"
                        class="h-10 min-w-10 rounded-full object-cover mr-2">
                    <div class="">
                        <div class="uppercase text-md text-gray-900">Bobson Latonio</div>
                        <div class="">
                            <div class="text-sm -mt-1 text-red-600">for approval</div>
                        </div>
                    </div>
                </div>
                <p class="mb-4 text-gray-800 text-sm">LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng
                    Dalubhasaang Politekniko
                    ng
                    Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                    ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                    lingkod-bayan?</p>

                <div class="flex flex-col gap-1">
                    <div
                        class=" group text-gray-700 w-full h-[100px] flex-shrink-0 bg-gray-50 border border-gray-300 rounded flex items-center justify-between text-center p-2">
                        <div class="flex gap-4 ml-2 items-center">
                            <div class="text-3xl ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-14">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                            </div>
                            <div class="text-base w-full font-semibold  line-clamp-4 break-words">
                                Document Ni Mang Kanor.docx
                            </div>
                        </div>
                    </div>
                    <div
                        class=" group text-gray-700 w-full h-[100px] flex-shrink-0 bg-gray-50 border border-gray-300 rounded flex items-center justify-between text-center p-2">
                        <div class="flex gap-4 ml-2 items-center">
                            <div class="text-3xl ">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-14">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>
                            </div>
                            <div class="text-base w-full font-semibold  line-clamp-4 break-words">
                                Document Ni Mang Kanor.docx
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full border-t  mt-4 border-gray-300"></div>
                <div class="flex items-center justify-between gap-2 text-gray-800">
                    <!-- Like -->
                    <button
                        class="flex gap-1  w-1/2 justify-center text-blue-700 hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Liked</div>
                        <div class="font-medium">25</div>
                    </button>

                    <!-- Comment -->
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>

            {{-- Post = 1 (Document and Image) --}}
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

                <div class="">
                    <div class="flex flex-col gap-1">
                        <div
                            class=" group text-gray-700 w-full h-[100px] flex-shrink-0 bg-gray-50 border border-gray-300 rounded flex items-center justify-between text-center p-2">
                            <div class="flex gap-4 ml-2 items-center">
                                <div class="text-3xl ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-14">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                    </svg>
                                </div>
                                <div class="text-base w-full font-semibold  line-clamp-4 break-words">
                                    Document Ni Mang Kanor.docx
                                </div>
                            </div>
                        </div>
                        <img src="https://picsum.photos/500/500" class="rounded w-full" />
                    </div>

                </div>

                <div class="w-full border-t  mt-4 border-gray-300"></div>
                <div class="flex items-center justify-between gap-2 text-gray-800">
                    <!-- Like -->
                    <button
                        class="flex gap-1  w-1/2 justify-center text-blue-700 hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Liked</div>
                        <div class="font-medium">25</div>
                    </button>

                    <!-- Comment -->
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>

            {{-- Post = 1 --}}
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

                <div class="">
                    <img src="https://picsum.photos/500/500" class="rounded w-full" />
                </div>

                <div class="w-full border-t  mt-4 border-gray-300"></div>
                <div class="flex items-center justify-between gap-2 text-gray-800">

                    <button
                        class="flex gap-1  w-1/2 justify-center text-blue-700 hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Liked</div>
                        <div class="font-medium">25</div>
                    </button>
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>

            {{-- Post = 2--}}
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

                <div class="grid grid-cols-2 gap-2">
                    <img src="https://picsum.photos/500/500" class="rounded" />
                    <img src="https://picsum.photos/500/500" class="rounded" />
                </div>

                <div class="w-full border-t  mt-4 border-gray-300"></div>
                <div class="flex items-center justify-between gap-2 text-gray-800">
                    <!-- Like -->
                    <button class="flex gap-1  w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Like</div>
                        <div class="font-medium">25</div>
                    </button>

                    <!-- Comment -->
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>

            {{-- Post = 3 --}}
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

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                    <img src="https://picsum.photos/500/500" class="rounded" />
                    <img src="https://picsum.photos/500/500" class="rounded" />
                    <img src="https://picsum.photos/500/500" class="rounded" />
                </div>

                <div class="w-full border-t  mt-4 border-gray-300"></div>
                <div class="flex items-center justify-between gap-2 text-gray-800">

                    <button class="flex gap-1  w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Like</div>
                        <div class="font-medium">25</div>
                    </button>
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>

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
                <div class="flex items-center justify-between gap-2 text-gray-800">
                    <button class="flex gap-1  w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Like</div>
                        <div class="font-medium">25</div>
                    </button>
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>

            {{-- Post = 5 or more --}}
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
                    <button class="relative">
                        <img src="https://picsum.photos/500/500" class="rounded" />
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded">
                            <span class="text-white text-3xl font-bold">+5</span>
                        </div>
                    </button>
                </div>


                <div class="w-full border-t  mt-4 border-gray-300"></div>
                <div class="flex items-center justify-between gap-2 text-gray-800">
                    <button class="flex gap-1  w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                        </svg>
                        <div>Like</div>
                        <div class="font-medium">25</div>
                    </button>
                    <button class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                        </svg>

                        <div>Comment</div>
                        <div class="font-medium">3</div>
                    </button>
                </div>
                <div class="w-full border-b border-gray-300"></div>
            </div>
        </main>

        <!-- Right Sidebar -->
        <aside class="hidden lg:block w-[288px] h-[calc(100vh-64px)] fixed right-0 top-16">
            <div class="w-full h-full overflow-y-auto pr-4 pb-4 space-y-4">
                <div class="bg-white w-full rounded shadow mt-4  ">
                    <div class="flex mb-2 pt-4 px-5 items-center justify-between">
                        <div class=" text-sm font-medium">Network</div>
                        <button class="text-sm hover:underline text-blue-600">See all</button>

                    </div>
                    <ul class="text-sm text-gray-700 pb-2 flex flex-col">
                        <li class="flex items-center  py-2 px-3 mx-2 gap-1.5">
                            <img class="h-9 min-w-9 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                            <div class="font-semibold truncate">JUAN DELA CRUZ</div>
                        </li>




                    </ul>
                </div>
                <div class="bg-white w-full rounded shadow mt-2  ">
                    <div class="flex mb-2 pt-4 px-5 items-center justify-between">
                        <div class=" text-sm font-medium">Officers</div>
                        <button class="text-sm hover:underline text-blue-600">See all</button>
                    </div>
                    <ul class="text-sm text-gray-700 pb-2 flex flex-col">
                        <li class="flex items-center py-2 px-3 mx-2 gap-1.5">
                            <img class="h-9 min-w-9 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                            <div class="flex flex-col">
                                <div class="font-semibold truncate">JUAN DELA CRUZ</div>
                                <div class="-mt-1 text-sm text-gray-700">President</div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </aside>
    </div>

    {{-- Create Post Modal --}}
    <x-slot:modal>
        <div class="fixed hidden inset-0 bg-black bg-opacity-40 z-50 flex items-center justify-center">
            <div
                class="bg-white flex flex-col  text-gray-900 w-full h-full  rounded-lg shadow-lg overflow-auto lg:flex-row lg:max-w-[calc(100vw-100px)] lg:max-h-[calc(100vh-100px)] lg:m-[100px]">
                <div
                    class="relative h-full w-full bg-black flex items-center justify-center overflow-hidden carousel-container">
                    <button
                        class="absolute top-3 left-5 text-white text-xl bg-gray-700/50 p-1 rounded-full hover:bg-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button
                        class="leftBtn absolute left-4 text-white text-3xl bg-black/50 p-2 rounded-full hover:bg-white hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.72 12.53a.75.75 0 0 1 0-1.06l7.5-7.5a.75.75 0 1 1 1.06 1.06L9.31 12l6.97 6.97a.75.75 0 1 1-1.06 1.06l-7.5-7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    {{-- Loop images here--}}
                    <img src="https://picsum.photos/id/1015/800/500"
                        class="carouselImg max-h-full max-w-full object-contain" />
                    <img src="https://picsum.photos/id/1016/800/500"
                        class="carouselImg max-h-full max-w-full object-contain" />
                    <img src="https://picsum.photos/id/1018/800/500"
                        class="carouselImg max-h-full max-w-full object-contain" />

                    <button
                        class="rightBtn absolute right-4 text-white text-3xl bg-black/50 p-2 rounded-full hover:bg-white hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"
                            stroke-width="3">
                            <path fill-rule="evenodd"
                                d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                </div>

                <script>
                    $(function () {
                        const $images = $(".carousel-container .carouselImg");
                        let currentIndex = 0;

                        function updateCarousel() {
                            $images.hide().eq(currentIndex).show();

                            if ($images.length === 1) {
                                $(".leftBtn, .rightBtn").hide();
                            } else {
                                if (currentIndex === 0) {
                                    $(".leftBtn").hide();
                                    $(".rightBtn").show();
                                } else if (currentIndex === $images.length - 1) {
                                    $(".leftBtn").show();
                                    $(".rightBtn").hide();
                                } else {
                                    $(".leftBtn, .rightBtn").show();
                                }
                            }
                        }

                        $(".leftBtn").click(function () {
                            if (currentIndex > 0) {
                                currentIndex--;
                                updateCarousel();
                            }
                        });

                        $(".rightBtn").click(function () {
                            if (currentIndex < $images.length - 1) {
                                currentIndex++;
                                updateCarousel();
                            }
                        });
                        updateCarousel();
                    });
                </script>

                <div class=" w-full h-[550px] lg:w-[700px] lg:h-full relative">
                    <div class="overflow-y-auto w-full h-[calc(100%-70px)]">
                        <div class="flex justify-between items-center p-4 pb-1 ">
                            <div class="flex items-center mb-2">
                                <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture"
                                    class="h-10 min-w-10 rounded-full object-cover mr-2">
                                <div class="">
                                    <div class="uppercase text-md text-gray-900">Bobson Latonio</div>
                                    <p class="text-sm -mt-1 text-gray-600">20 min. ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="px-4">
                            <div class="text-sm min-h-[60px]">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat
                                non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur
                                pretium
                                tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra,
                                est
                                eros
                                bibendum elit, nec luctus magna felis sollicitudin mauris.
                            </div>
                            <div class="w-full border-t  mt-4 border-gray-300"></div>
                            <div class="flex items-center justify-between gap-2 text-gray-800">
                                <button
                                    class="flex gap-1  w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                    <div>Like</div>
                                    <div class="font-medium">25</div>
                                </button>
                                <button
                                    class="flex gap-1 w-1/2 justify-center hover:bg-gray-200 rounded-lg px-3 py-3 text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
                                    </svg>

                                    <div>Comment</div>
                                    <div class="font-medium">3</div>
                                </button>
                            </div>
                            <div class="w-full border-b border-gray-300"></div>
                            <div class=" mt-4">
                                <div class="flex items-start py-1 text-sm gap-2.5">
                                    <img class="h-9 min-w-9 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                        src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                                    <div class="flex flex-col">
                                        <div class="truncate">PAPA DUDUT</div>
                                        <div class="-mt-1">Paano kung nagmahal ka taong bawal mahalin?Paano kung
                                            nagmahal ka
                                            taong bawal mahalin?Paano kung nagmahal ka taong bawal mahalin?Paano kung
                                            nagmahal ka taong bawal mahalin? </div>
                                        <div class=" text-xs text-gray-700">11:00 AM</div>
                                    </div>
                                </div>
                                <div class="flex items-start py-1 text-sm gap-2.5">
                                    <img class="h-9 min-w-9 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                        src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                                    <div class="flex flex-col">
                                        <div class="truncate">PAPA DUDUT</div>
                                        <div class="-mt-1">Paano kung nagmahal ka taong bawal mahalin?Paano kung
                                            nagmahal ka
                                            taong bawal mahalin?Paano kung nagmahal ka taong bawal mahalin?Paano kung
                                            nagmahal ka taong bawal mahalin? </div>
                                        <div class=" text-xs text-gray-700">11:00 AM</div>
                                    </div>
                                </div>
                                <div class="flex items-start py-1 text-sm gap-2.5">
                                    <img class="h-9 min-w-9 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                        src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                                    <div class="flex flex-col">
                                        <div class="truncate">PAPA DUDUT</div>
                                        <div class="-mt-1">Paano kung nagmahal ka taong bawal mahalin?Paano kung
                                            nagmahal ka
                                            taong bawal mahalin?Paano kung nagmahal ka taong bawal mahalin?Paano kung
                                            nagmahal ka taong bawal mahalin? </div>
                                        <div class=" text-xs text-gray-700">11:00 AM</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full">
                        <div class="flex items-start py-1 px-4 text-sm gap-2.5 w-full">
                            <img class="h-9 min-w-9 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                            <div class="flex flex-col w-full h-full">
                                <textarea
                                    class="w-full h-auto resize-none bg-gray-100 border focus:outline-none text-gray-900 p-2 rounded"
                                    placeholder="Comment..."></textarea>
                            </div>
                            <div class="rounded-full p-2 bg-gray-800 hover:bg-gray-700 text-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-5">
                                    <path fill-rule="evenodd"
                                        d="M11.47 2.47a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 1 1-1.06 1.06l-6.22-6.22V21a.75.75 0 0 1-1.5 0V4.81l-6.22 6.22a.75.75 0 1 1-1.06-1.06l7.5-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                        </div>
                    </div>

                </div>



            </div>

        </div>

        <div class="fixed hidden inset-0 bg-black bg-opacity-40 z-50 flex items-center justify-center">
            <div class="bg-white text-gray-900 h-full sm:h-auto w-full max-w-lg rounded-lg shadow-lg p-4">
                <div class="flex justify-between items-center border-b pb-2">
                    <h2 class="text-lg font-semibold">Create post</h2>
                    <button class="text-gray-500 hover:text-gray-800 text-xl">✕</button>
                </div>

                <div class="flex items-center gap-3 mt-4 mb-3">
                    <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture"
                        class="h-10 min-w-10 rounded-full object-cover">
                    <div>
                        <div class="font-semibold uppercase text-sm">Bobson Latonio</div>
                        <div class="text-sm -mt-1 text-gray-700">
                            Alumni •
                        </div>
                    </div>
                </div>

                <div class="overflow-y-auto max-h-[calc(100vh-330px)] sm:max-h-[250px] -mr-4 pr-4">
                    <textarea id="autoGrow"
                        class="w-full bg-transparent focus:outline-none placeholder-gray-500 placeholder:text-xl mt-4 resize-none overflow-hidden"
                        rows="3" style="overflow:hidden" placeholder="What's on your mind?"></textarea>

                    <script>
                        $('#autoGrow').on('input', function () {
                            this.style.height = 'auto';
                            this.style.height = this.scrollHeight + 'px';
                        });
                    </script>

                    <div class="flex flex-col gap-1 mb-2">
                        <div
                            class=" group w-full h-[30px] flex-shrink-0 bg-gray-50 border rounded flex items-center justify-between text-center p-2">
                            <div class="flex gap-2 ml-2 items-center">
                                <div class="text-3xl text-gray-600 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>

                                </div>
                                <div class="text-xs w-full line-clamp-4 break-words">
                                    Document Ni Jose Rizal.docx
                                </div>
                            </div>
                            <button
                                class=" bg-gray-100 text-gray-700 mr-1 rounded-full w-6 h-6 text-xs hidden group-hover:flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class=" group w-full h-[30px] flex-shrink-0 bg-gray-50 border rounded flex items-center justify-between text-center p-2">
                            <div class="flex gap-2 ml-2 items-center">
                                <div class="text-3xl text-gray-600 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>

                                </div>
                                <div class="text-xs w-full line-clamp-4 break-words">
                                    Document Ni Jose Rizal.docx
                                </div>
                            </div>
                            <button
                                class=" bg-gray-100 text-gray-700 mr-2 rounded-full w-6 h-6 text-xs hidden group-hover:flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class=" group w-full h-[30px] flex-shrink-0 bg-gray-50 border rounded flex items-center justify-between text-center p-2">
                            <div class="flex gap-2 ml-2 items-center">
                                <div class="text-3xl text-gray-600 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>

                                </div>
                                <div class="text-xs w-full line-clamp-4 break-words">
                                    Document Ni Jose Rizal.docx
                                </div>
                            </div>
                            <button
                                class=" bg-gray-100 text-gray-700 mr-2 rounded-full w-6 h-6 text-xs hidden group-hover:flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div
                            class=" group w-full h-[30px] flex-shrink-0 bg-gray-50 border rounded flex items-center justify-between text-center p-2">
                            <div class="flex gap-2 ml-2 items-center">
                                <div class="text-3xl text-gray-600 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="size-6">
                                        <path
                                            d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                                        <path
                                            d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
                                    </svg>

                                </div>
                                <div class="text-xs w-full line-clamp-4 break-words">
                                    Document Ni Jose Rizal.docx
                                </div>
                            </div>
                            <button
                                class=" bg-gray-100 text-gray-700 mr-2 rounded-full w-6 h-6 text-xs hidden group-hover:flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-1 pb-3">

                        {{-- Image --}}
                        <div class="relative group ">
                            <div class="aspect-square rounded w-auto overflow-hidden relative">
                                <img src="https://picsum.photos/500/100" alt="Example Image"
                                    class="h-full aspect-square object-cover" />
                            </div>
                            <button
                                class="absolute top-1 right-1 bg-gray-100 text-gray-700 rounded-full w-6 h-6 text-xs hidden group-hover:flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        {{-- Image --}}
                        <div class="relative group">
                            <div class="aspect-square rounded w-auto overflow-hidden relative">
                                <img src="https://picsum.photos/500/500" alt="Example Image"
                                    class="h-full aspect-square object-cover" />
                            </div>

                            <button
                                class="absolute top-1 right-1 bg-gray-100 text-gray-700 rounded-full w-6 h-6 text-xs hidden group-hover:flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- position in bottom-0 --}}
                <div class="">
                    <div class="text-xs text-red-700">Error: Your files can't be uploaded.</div>

                    <div class=" border border-gray-300 shadow-sm p-2 rounded-md mt-3">
                        <div class="flex justify-between items-center text-xl mx-2">
                            <p class="text-base text-gray-600">Add to your post</p>
                            <div class="flex gap-2">
                                <button class="bg-gray-200 px-2 h-10 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                    </svg>
                                </button>
                                <button class="bg-gray-200 px-2 h-10 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-1 text-xs text-gray-600">Note: All posts must be approved by the admin before they
                        become public.</div>
                    <button
                        class="w-full mt-6 bg-gray-800 text-gray-200 cursor-not-allowed rounded-md py-2 font-semibold">Post
                    </button>
                </div>


            </div>
        </div>

    </x-slot:modal>


    {{-- <div class="relative flex flex-col text-center justify-center w-full lg:max-h-[600px] -mt-16 h-[calc(100vh-110px)] mb-14 
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
    </div> --}}

    {{-- Network - Feature Section --}}
    {{-- <div class="flex justify-center mb-14">
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
    </div> --}}

    {{-- <section>
        <div class="mx-auto max-w-screen-xl px-4 bg-gray-50 border rounded-lg py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <img src="/assets/images/SampleAnnounImage.jpg" class="rounded" alt="" />
                </div>
                <div>
                    <div class="max-w-lg md:max-w-none">
                        <div class="text-sm title-font text-gray-500 tracking-widest">
                            Btech Baliwag
                        </div>
                        <div class="text-2xl font-semibold text-gray-900 uppercase">
                            Libreng Virtual Review para sa Licensure Examination for Teachers
                        </div>

                        <div class="mt-4 text-gray-700 text-sm line-clamp-6" id="textContainer">
                            LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION
                            handog ng Dalubhasaang Politekniko ng Lungsod ng Baliwag (BTECH)
                            Gusto mo bang magtagumpay sa Civil Service Examination mo ngayong Agosto 11,
                            2024? Handa ka na bang harapin ang hamon ng pagiging isang lingkod-bayan?
                            Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                            Examination Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon
                            – 8:30 ng gabi.
                            Ano ang mga aasahan mo?
                            1. Komprehensibong pagsusuri ng mga kahalagahan sa Civil Service Exam
                            2. Masususing Pagsasanay sa mga sumusunod na paksa:
                            • Pag-unawa sa Eksaminasyong Sibil
                            • Talasalitaan at Pagbaybay (Vocabulary and Spelling)
                            • Balarila sa Ingles at Tamang Gamit (Grammar and Correct Usage)
                            • Pagsusuri ng Binabasa (Reading Comprehension)
                            • Sulat Pakikipagtalastasan at Pagsulat ng Sanaysay (Written Communication and
                            Essay Writing)
                            • Operasyong Klerikal (Clerical Operations)
                            • Matematikang Operasyon, Paglutas ng Problema, at Numerikal na Pagsusuri
                            (Mathematical Operations, Problem-solving, and Numerical Reasoning)
                            • Lohikal na Pagsusuri at Analitikal na Kakayahan (Logical Reasoning and
                            Analytical Skills)
                            • Pangkalahatang Kaalaman Tungkol sa Agham, Teknolohiya, at Sining (General
                            Knowledge About Science, Technology, and The Arts)
                            • Mga Kasalukuyang Pangyayari at Mga Napapanahong Isyu (Current Events and
                            Contemporary Issues)
                            • Pamamahala at Pangangalaga sa Kapaligiran (Environment Management &
                            Protection)
                            • Kasaysayan ng Pilipinas, Sistema ng Pamahalaan, at Ang Saligang Batas
                            (Philippine History, Government Systems, and The Constitution)
                            • Pangkalahatang Kaalaman Tungkol sa Agham, Teknolohiya, at Sining (General
                            Knowledge About Science, Technology, and The Arts)
                            • Mga Isyu at Konsepto ng Kapayapaan at Karapatang Pantao (Peace & Human Rights
                            Issues and Concepts)
                            • R.A. 6713: Kodigo ng Pag-uugali at Mga Pamantayang Etikal para sa mga Opisyal
                            at Empleyado ng Pamahalaan (R.A. 6713: Code of Conduct & Ethical Standards for
                            Public Officials & Employees)
                            3. Kasanayan para sa epektibong pagsagot sa mga tanong.
                            Mga Kwalipikasyon at Dokumento na Kailangang Isumite
                            1. Pilipino, Edad 18 pataas
                            2. Nakatala na kukuha ng Civil Service Examination ngayong paparating na Agosto
                            11, 2024
                            3. Kopya ng isang beripikadong pagkakakilanlan (Valid ID)
                            4. Kopya ng iyong NOSA (Notice of School Assignment)
                            5. Larawan ng pagkakakilanlan (Passport Size ID Picture in formal attire & white
                            background)
                            6. Long Brown Envelop
                        </div>
                        <a class="hover:text-blue-400 hover:underline text-sm font-medium">See more</a>

                        <button
                            class="flex items-center justify-center px-5 mt-4 text-gray-600 transition-colors duration-300 transform border rounded-lg hover:bg-gray-100">
                            <div class="flex items-center justify-center pr-2 py-1">
                                <svg class="h-8 w-8 " fill="rgb(23, 107, 251)" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 64 64">
                                    <path
                                        d="M32,6C17.642,6,6,17.642,6,32c0,13.035,9.603,23.799,22.113,25.679V38.89H21.68v-6.834h6.433v-4.548	c0-7.529,3.668-10.833,9.926-10.833c2.996,0,4.583,0.223,5.332,0.323v5.965h-4.268c-2.656,0-3.584,2.52-3.584,5.358v3.735h7.785
                                            l-1.055,6.834h-6.73v18.843C48.209,56.013,58,45.163,58,32C58,17.642,46.359,6,32,6z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-sm"> View Post </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}


</x-layout.client-layout>