<x-layout.client-layout>
    <div class="max-w-screen-xl sm:px-6  mx-auto flex flex-col items-center">
        <h2 class="text-3xl mt-6 mb-2 font-bold text-[#273461] dark:text-[#5a7eff]">Your Post</h2>
        <main class="flex-1 p-4 space-y-4 sm:mx-auto w-full sm:w-[650px]  overflow-y-auto h-[calc(100vh-64px)]">
            {{-- Post Box --}}
            <div class="w-full flex items-center bg-white rounded-md shadow p-4">
                <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile"
                    class="h-10 min-w-10 rounded-full object-cover mr-2">

                <div class="flex items-center w-full space-x-1">
                    <button class="flex-grow h-10 bg-gray-100 rounded-full px-4 outline-none text-start text-gray-400">
                        What's on your mind?
                    </button>

                    <button class="bg-gray-200 px-2 h-10 hidden sm:flex rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 text-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </button>
                    <button class="bg-gray-200 px-2 h-10 hidden sm:flex  rounded-full">
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

        {{-- <div class="w-3/4">
            <div class="relative">
                <img src="{{ asset('assets/images/profile-bg.jpg') }}" alt="Cover"
                    class="w-full h-60 object-cover rounded-b-xl">


                <div
                    class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-70 rounded-b-xl">
                </div>

                <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                    <div class=" mb-4">
                        <div class="w-32 h-32 rounded-full border-2 border-gray-100 overflow-hidden">
                            <img src="{{ asset('assets/images/alumni-id-pic.jpeg') }}" alt="Zion Logo"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <h1 class="text-xl font-semibold text-white uppercase">Rhon Harvey Lacsina</h1>
                </div>
            </div>
        </div>

        <div class="mt-2">
            <div class="text-sm text-gray-800">Your Post</div>

        </div> --}}
    </div>


    <x-slot:modal>
        <div class="fixed inset-0 hidden bg-black bg-opacity-40 z-50 flex items-center justify-center">
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

        <div class="fixed inset-0 hidden bg-black bg-opacity-40 z-50 flex items-center justify-center">
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

</x-layout.client-layout>