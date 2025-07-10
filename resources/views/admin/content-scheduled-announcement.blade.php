<x-layout.admin-layout pageTitle="Manage Content">

    <div class=" w-full flex justify-center pr-[300px] gap-8">
        <div class="flex flex-col w-[670px] mx-auto items-center pt-4 px-10 overflow-y-auto h-[calc(100vh-117px)] ">
            <x-admin-components.admin-announcement-header announcementHeader="Scheduled Deletion" />

            <!-- 2 -->
            <div>
               post here


            </div>




        </div>
        <!-- right side -->
        <div
            class="flex flex-col fixed bottom-0 right-0 overflow-y-auto bg-white pt-5 pb-4 gap-1 px-5 w-[300px] h-[calc(100vh-117px)]">
            <div class="w-full">
                <div class="flex justify-between items-center text-gray-600 mb-2">
                    <p class="text-md font-semibold ">Pending Post</p>
                    <a href="{{ route('admin-pending-announcement') }}" class="mr-1 text-sm text-blue-600 hover:underline">
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
                    <p class="text-md font-semibold ">Published Post</p>
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