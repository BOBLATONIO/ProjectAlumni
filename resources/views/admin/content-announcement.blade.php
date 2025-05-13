<x-layout.admin-layout pageTitle="Manage Content">
    
    <x-slot:headerTab>
        <a href=""
            class="block font-semibold  px-4 py-2  text-center text-white duration-150  bg-[#2a47b2] rounded-md hover:bg-indigo-500 active:bg-indigo-700">
            Announcement
        </a>
        <a href=""
            class="block px-4 py-2 text-center text-gray-700 duration-150 font-medium rounded-md border hover:bg-gray-50 active:bg-gray-100">
            Officers
        </a>
        <a href=""
            class="block px-4 py-2 text-center text-gray-700 duration-150 font-medium rounded-md border hover:bg-gray-50 active:bg-gray-100">
            Institute & Program
        </a>
        <a href=""
            class="block px-4 py-2 text-center text-gray-700 duration-150 font-medium rounded-md border hover:bg-gray-50 active:bg-gray-100">
            Questionnaire
        </a>
        <a href=""
        class="block px-4 py-2 text-center text-gray-700 duration-150 font-medium rounded-md border hover:bg-gray-50 active:bg-gray-100">
        FAQ
    </a>
    </x-slot:headerTab>

    

    <div class="flex justify-center w-full gap-8 px-4">
        <div class="flex flex-col w-[100%]  items-center mt-4">
            <div class="w-full  rounded-md max-w-[700px]">
                <div class="flex items-center justify-between w-full ">
                    <div>
                        <h2 class="text-lg font-semibold">Announcement</h2>
                    </div>
                    <button
                        class="bg-gray-200 hover:bg-gray-300 border-gray-300 border text-sm py-2 px-4 rounded-md flex items-center">
                        New Announcement
                    </button>

                </div>
            </div>


            <!-- 2 -->
            <div>
                <div class="announcement max-w-[700px] w-full bg-white shadow-md rounded-lg p-4 my-3">
                    <div class="flex items-center space-x-3">
                        <div>
                            <div class="flex justify-between">
                                <div class="text-sm title-font text-gray-500 mb-1">
                                    <span>Institute of Information Technology and Innovation</span> • <span>8h</span>
                                    <span class="text-red-500 text-xs">- 1 min remaining</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>
                            </div>
                            <div class="text-lg font-semibold leading-none text-gray-900 uppercase mr-4">
                                Libreng Virtual Review para sa Licensure Examination for Teachers
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="announcementBody text-gray-700 text-xs mt-3  line-clamp-3 -mb-1 overflow-hidden ">
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                    </p>
                    <!-- This <button> tag will be hidden if the announcement body is too short or does not exceed the set length limit. -->
                    <button class="toggleButton hover:text-blue-400 hover:underline text-xs font-medium hidden">
                        See more
                    </button>
                    <!-- This <a> tag will be hidden if its href attribute is empty or not defined -->
                    <a href="hello.com" rel="noopener" target="_blank"
                        class="facebook-link block text-xs text-blue-600 hover:underline">
                        View original post on facebook.
                    </a>
                    <div class="mt-2">
                        <img src="https://dummyimage.com/500x500" alt="Post Image"
                            class="w-full rounded-lg border border-indigo-300 hover:shadow-lg transition cursor-pointer">
                    </div>
                </div>


            </div>




        </div>
        <!-- right side -->
        <div class="flex flex-col justify-center gap-1 px-5 w-[50%] h-full mt-5">
            <!-- <button class=" w-full py-2 bg-[#273461] text-sm text-white rounded-md">Create a
                post</button> -->
            <div class="w-full">
                <div class="flex justify-between text-gray-600 mb-2">
                    <p class="text-md font-semibold ">Scheduled Deletion</p>
                    <button class="mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                </div>
                <!-- deletion schedule container-->
                <div class="flex flex-col gap-1">
                    <x-admin-components.admin-sched-del-temp title="Libreng Virtual Review para sa Licensure Examination for Teachers Libreng Virtual
                            Review para sa Licensure Examination for Teachers Libreng Virtual
                            Review para sa Licensure Examination for Teachers" author="Dalubhasaang Polytechnico ng Lungsod
                                ng Baliwag" delSched="59 mins remaining."
                        imgSrc="assets/images/SampleAnnounImage.jpg" />

                    {{-- insert here...--}}
                </div>
            </div>
            <div class="border-t-[1.5px] my-2 mt-3"></div>
            <div class="w-full">
                <div class="flex justify-between text-gray-600 mb-2">
                    <p class="text-md font-semibold ">Officers</p>
                    <button class="mr-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </button>
                </div>
                <!-- officer container preview -->
                <div class="flex flex-col gap-1">

                    <x-admin-components.admin-side-officer-temp name="Rhon Harvey M. Lacsina" position="President"
                        profileSrc="https://ui-avatars.com/api/?name=h+l&size=44" />
                    <x-admin-components.admin-side-officer-temp name="Rhon Harvey M. Lacsina" position="President"
                        profileSrc="https://ui-avatars.com/api/?name=K+A&size=44" />

                    {{-- insert here...--}}

                </div>
            </div>



        </div>


    </div>

    @push('scripts')
    <script src="{{ asset('assets/js/admin-announcement.js') }}"></script>
    @endpush

</x-layout.admin-layout>