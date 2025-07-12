<x-layout.admin-layout pageTitle="Manage Alumni">


    <div class="mx-1  px-4 mb-4 bg-gray-50 mt-3 border rounded-sm ">
        <div class="flex flex-col items-start justify-between py-3 ">
            <div class="flex items-center justify-between text-sm  w-full">
                <div class="flex gap-1 items-center">
                    <div class="flex items-center space-x-2">
                        <input
                            class="w-8 h-8 rounded-sm bg-gray-200 text-gray-900 placeholder:text-gray-900 text-center font-medium focus:outline-none"
                            value="4">
                        <span class="text-gray-700">of 20 pages</span>
                        <button
                            class="flex items-center justify-center p-1.5 rounded-sm border border-gray-300 text-gray-700 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button
                            class="flex items-center justify-center  p-1.5 rounded-sm border border-gray-300 text-gray-700 hover:bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>


                </div>
                <div class="flex gap-2">
                    <div class="w-64">
                        <div
                            class="flex text-xs px-4 py-1 rounded-sm border border-gray-300 bg-gray-50  overflow-hidden">
                            <input type="email" placeholder="Search Alumni..."
                                class="w-full outline-none bg-transparent text-gray-600 text-sm placeholder:text-gray-700" />
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="14px"
                                class="fill-gray-700">
                                <path
                                    d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center ml-2">
                        <div class=" mr-3">Status: </div>
                        <div class="relative w-full">
                            <select
                                class="block appearance-none w-full text-gray-700 bg-gray-50 border-gray-300  border-b text-sm py-1 text-start focus:outline-none">
                                <option value="">All</option>
                                <option value="option1">Registered</option>
                                <option value="option2">Unregistered</option>
                            </select>
                            <svg class="w-2.5 h-2.5 absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="m1 1 4 4 4-4" />
                            </svg>
                        </div>
                    </div>

                    <div class="flex items-center ml-2">
                        <button
                            class="flex items-center gap-2 text-sm px-5 py-1.5 rounded-sm bg-gray-800 border border-gray-800 text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>
                            Import Alumni List
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap gap-4 mx-2 p-3 rounded-sm border bg-gray-50 border-gray-300 my-1">
            <div class="flex-1 min-w-[100px] px-4 border-r border-gray-300 last:border-r-0">
                <p class="text-gray-500 text-md">Total Alumni</p>
                <p class="text-2xl font-bold">756</p>

            </div>
            <div class="flex-1 min-w-[100px] px-4 border-r border-gray-300 last:border-r-0">
                <p class="text-gray-500 text-md">Registered Alumni</p>
                <p class="text-2xl font-bold">756</p>

            </div>
            <div class="flex-1 min-w-[100px] px-4 border-r border-gray-300 last:border-r-0">
                <p class="text-gray-500 text-md">Unregistered Alumni</p>
                <p class="text-2xl font-bold">1,593</p>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase font-semibold border-b d">
                <tr>
                    <td scope="col" class="px-2 py-3 max-w-[5px] truncate overflow-hidden whitespace-nowrap">
                        <input type="checkbox" />
                    </td>
                    <td scope="col" class="px-2 py-3  max-w-[50px] truncate overflow-hidden whitespace-nowrap">
                        Student ID</td>
                    <td scope="col" class="px-2 py-3 max-w-[100px] truncate overflow-hidden whitespace-nowrap ">Last
                        Name
                    </td>
                    <td scope="col" class="px-2 py-3 max-w-[100px] truncate overflow-hidden whitespace-nowrap">First
                        Name
                    </td>
                    <td scope="col" class="px-2 py-3 max-w-[80px] truncate overflow-hidden whitespace-nowrap">Middle
                        Name
                    </td>
                    <td scope="col" class="px-2 py-3 max-w-[55px] truncate overflow-hidden whitespace-nowrap ">Program
                    </td>
                    <td scope="col" class="px-2 py-3 max-w-[50px] truncate overflow-hidden whitespace-nowrap ">
                        Batch Year
                    </td>
                    <td scope="col" class="px-2 py-3 max-w-[35px] truncate overflow-hidden whitespace-nowrap ">Action
                    </td>
                </tr>
            </thead>
            <tbody class="text-gray-800 font-light">
                <tr class="border-b last:border-b-0 odd:bg-gray-100">
                    <td class="px-2 py-2  max-w-[5px] truncate overflow-hidden whitespace-nowrap"><input
                            type="checkbox" /></td>
                    <td class="px-2 py-2  max-w-[50px] truncate overflow-hidden whitespace-nowrap">83495534</td>
                    <td class="px-2 py-2 truncate max-w-[100px] overflow-hidden whitespace-nowrap uppercase"
                        title="change this for long name">Latonio</td>
                    <td class="px-2 py-2 truncate max-w-[100px] overflow-hidden whitespace-nowrap uppercase"
                        title="change this for long name">bobson</td>
                    <td class="px-2 py-2 truncate max-w-[100px] overflow-hidden whitespace-nowrap uppercase"
                        title="change this for long name">abulencia</td>
                    <td class="px-2 py-2 max-w-[55px] truncate overflow-hidden whitespace-nowrap"
                        title="change this for long program">BTLED</td>
                    <td class="px-2 py-2 max-w-[50px] truncate overflow-hidden whitespace-nowrap ">1999</td>
                    <td class=" relative px-4 py-2 max-w-[35px]">
                        <button
                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                        </button>
                        <div
                            class="dropdown-menu hidden absolute right-7 z-[100] w-auto bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <form action="">
                                <a href="#" class="block py-1 px-4 hover:bg-gray-100 ">Edit</a>
                                <a href="#" class="block py-1 px-4 hover:bg-gray-100 ">Delete</a>
                            </form>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>


    <x-slot:modal>
        {{-- Confirmation Modal --}}
        <div class="fixed  inset-0 flex  items-center justify-center bg-black bg-opacity-30 z-50">
            <div class="bg-white rounded-sm shadow-xl w-full max-w-sm p-6 text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-red-100 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mb-2">Are you sure?</h2>
                <p class="text-gray-600 mb-6">This action is permanent. All information related to this alumni will be
                    removed and cannot be recovered.</p>
                <div class="space-y-2">
                    <button
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-sm transition duration-150">
                        Delete Account
                    </button>
                    <button
                        class="w-full border border-gray-300 text-gray-700 font-medium py-2 px-4 rounded-sm hover:bg-gray-100 transition duration-150">
                        Cancel
                    </button>
                </div>
            </div>
        </div>

        {{-- Confirmation Modal --}}
        <div class="fixed inset-0 hidden flex  items-center justify-center bg-black bg-opacity-30 z-50">
            <div class="bg-white rounded-sm shadow-xl w-full max-w-sm p-6 text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-red-100 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mb-2">Are you sure?</h2>
                <p class="text-gray-600 mb-6">This will reset the alumni's account. Their password and settings will be
                    cleared. This action cannot be undone.</p>
                <div class="space-y-2">
                    <button
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-sm transition duration-150">
                        Reset Account
                    </button>
                    <button
                        class="w-full border border-gray-300 text-gray-700 font-medium py-2 px-4 rounded-sm hover:bg-gray-100 transition duration-150">
                        Cancel
                    </button>
                </div>
            </div>
        </div>

        <!-- Dismiss Alumni Modal -->
        <div class="fixed inset-0 hidden flex items-center justify-center bg-black bg-opacity-30 z-50">
            <div class="bg-white rounded-sm shadow-xl w-full max-w-sm p-6 text-center">

                <div class="flex justify-center mb-4">
                    <div class="bg-red-100 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                        </svg>
                    </div>
                </div>
                <h2 class="text-xl font-semibold mb-2">Are you sure?</h2>
                <p class="text-gray-600 mb-6">
                    This will deactivate the alumni's account. They will lose access, but their records will be kept for
                    future reference.
                </p>

                <div class="space-y-2">
                    <button
                        class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-sm transition duration-150">
                        Dismiss Account
                    </button>
                    <button
                        class="w-full border border-gray-300 text-gray-700 font-medium py-2 px-4 rounded-sm hover:bg-gray-100 transition duration-150">
                        Cancel
                    </button>
                </div>

            </div>
        </div>



        {{-- View Alumni Modal --}}
        <div class="fixed inset-0 flex hidden items-center justify-center bg-black bg-opacity-30 z-50">
            <div class="max-w-3xl mx-auto bg-white p-8 py-5  rounded-sm shadow space-y-6">
                <div class="flex justify-between items-center border-b pb-3 -mx-8 px-6">
                    <h2 class="text-lg font-semibold">Alumni Details</h2>
                    <button class="text-gray-400 hover:text-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>


                <div class="flex items-center space-x-4">
                    <div class="relative w-20 h-20 group">
                        <img src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile"
                            class="w-full h-full rounded-full object-cover">

                        <div
                            class="absolute group-hover:flex hidden inset-0 flex-col items-center justify-center text-gray-200 text-[11px] bg-black bg-opacity-40 rounded-full">
                            <button class="hover:underline">View</button>
                            <button class="hover:underline">Delete</button>
                        </div>
                    </div>



                    <div class="flex flex-col">
                        <div class="block text-sm font-medium mb-1">
                            Status: <span class="font-normal">Unregistered</span>
                        </div>
                        <div class="flex gap-1 text-xs font-medium mb-1">
                            <button class=" text-blue-500 border py-1.5 px-4 rounded-sm">Reset</button>
                            <button class=" text-blue-500 border py-1.5 px-4 rounded-sm">Dismiss</button>
                            <button class="bg-red-400 py-1.5 text-white px-4 rounded-sm">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>
                        <label class="block font-medium text-sm mb-1">First name</label>
                        <input type="text" value="BINI HARVEY"
                            class="w-full border rounded-sm p-2 text-sm focus:outline-none" />
                    </div>

                    <div>
                        <label class="block font-medium text-sm mb-1">Last name</label>
                        <input type="text" value="LACSINA"
                            class="w-full border rounded-sm p-2 text-sm focus:outline-none" />
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium  mb-1">Gender</label>
                        <select
                            class="appearance-none w-full pl-2 py-2 pr-8 text-gray-700 border rounded-sm text-sm focus:outline-none">
                            <option value="2021">Male</option>
                            <option value="2022">Female</option>
                        </select>
                        <svg class="w-2.5 h-2.5 absolute right-3 top-11 transform -translate-y-1/2 pointer-events-none"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <div>
                        <label class="block font-medium text-sm mb-1">Student ID</label>
                        <input type="text" value="202233112"
                            class="w-full border rounded-sm p-2 text-sm focus:outline-none" />
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium  mb-1">Batch Year</label>
                        <select
                            class="appearance-none w-full pl-2 py-2 pr-8 text-gray-700 border rounded-sm text-sm focus:outline-none">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                        <svg class="w-2.5 h-2.5 absolute right-3 top-11 transform -translate-y-1/2 pointer-events-none"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium mb-1">Institute</label>
                        <select
                            class="appearance-none w-full pl-2 py-2 pr-8 text-gray-700 border rounded-sm text-sm focus:outline-none">
                            <option value="IITI">IITI</option>
                            <option value="EDUC">EDUC</option>
                        </select>
                        <svg class="w-2.5 h-2.5 absolute right-3 top-11 transform -translate-y-1/2 pointer-events-none"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium mb-1">Program</label>
                        <select
                            class="appearance-none w-full pl-2 py-2 pr-8 text-gray-700 border rounded-sm text-sm focus:outline-none">
                            <option value="BSEd-English">BSEd English</option>
                            <option value="BSIT">BSIT</option>
                        </select>
                        <svg class="w-2.5 h-2.5 absolute right-3 top-11 transform -translate-y-1/2 pointer-events-none"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <div class=" w-full pl-2 py-2 pr-8 text-gray-700 border rounded-sm text-sm ">
                            sample@gmail.com
                        </div>
                    </div>
                </div>
                <div class="flex justify-end gap-4 items-center text-sm border-t pt-4 -mx-8 px-6">
                    <button class="hover:underline">Discard</button>
                    <button class="px-4 py-2 bg-gray-800 rounded-sm text-gray-100">Save Changes</button>
                </div>
            </div>
        </div>

    </x-slot:modal>

    @push('scripts')
    <script>
        $(document).ready(function () {
            // Toggle dropdown when button is clicked
            $("button").on("click", function (e) {
                e.stopPropagation(); // Prevent the click from bubbling up
                // Hide all other dropdowns
                $(".dropdown-menu").not($(this).siblings(".dropdown-menu")).hide();

                // Toggle current dropdown
                $(this).siblings(".dropdown-menu").toggle();
            });

            // Hide dropdown when clicking outside
            $(document).on("click", function () {
                $(".dropdown-menu").hide();
            });


        });

        $(document).ready(function () {
            $('.filter-toggle-btn button').click(function () {
                $('.filter-panel').toggle(); // Show/hide the panel
            });

            // Optional: close panel when clicking the close icon
            $('.filter-panel svg').first().click(function () {
                $('.filter-panel').hide();
            });

            // Optional: close panel when clicking outside
            $(document).click(function (e) {
                if (!$(e.target).closest('.filter-toggle-btn, .filter-panel').length) {
                    $('.filter-panel').hide();
                }
            });
        });




    </script>
    @endpush


</x-layout.admin-layout>