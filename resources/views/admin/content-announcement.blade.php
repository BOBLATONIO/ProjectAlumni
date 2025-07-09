<x-layout.admin-layout pageTitle="Manage Content">

    <div class="flex justify-center w-full gap-8 px-4">
        <div class="flex flex-col w-[100%]  items-center mt-4">
            <div class="w-full  rounded-md max-w-[700px] mb-4">
                <div class="flex items-center justify-between w-full ">
                    <div>
                        <h2 class="text-lg font-semibold">Announcement</h2>
                    </div>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 border-gray-300 border text-sm py-2 px-4 rounded-md flex items-center">
                        Create new post
                    </button>

                </div>
            </div>

            <!-- 2 -->
            <div>
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


            </div>




        </div>
        <!-- right side -->
        <div class="flex flex-col justify-center gap-1 px-5 w-[50%] h-full mt-5">
            <div class="w-full">
                <div class="flex justify-between items-center text-gray-600 mb-2">
                    <p class="text-md font-semibold ">Pending Post</p>
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
                            <div class="text-blue-500">5 mins ago</div>
                        </div>
                    </a>
                    <a href="" class="h-20 flex text-xs items-center border-gray-200 border p-2 rounded-lg">
                        <img alt="annoucement-image"
                            class="w-16 h-16 bg-gray-100 object-cover object-center rounded-md flex-shrink-0 mr-3"
                            src="{{ asset('assets/images/SampleAnnounImage.jpg') }}">
                        <div class="flex-grow">
                            <div class="text-gray-500 line-clamp-1 uppercase">JUan dela cruz</div>
                            <div class="text-gray-900 font-medium line-clamp-2">body here</div>
                            <div class="text-blue-500">1 hr ago</div>
                        </div>
                    </a>

                    {{-- insert here...--}}
                </div>
            </div>
            <div class="border-t-[1.5px] my-2 mt-3"></div>
            <div class="w-full">
                <div class="flex justify-between text-gray-600 mb-2">
                    <p class="text-md font-semibold ">Schedule Deletion</p>
                    <a href="" class="mr-1 text-sm text-blue-600 hover:underline">
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
                            <div class="text-red-500">55 mins remaining</div>
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