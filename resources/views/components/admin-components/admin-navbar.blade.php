@props(['imageSrc'])

<header class="bg-gray-50  w-full border-b dark:bg-[#252728] dark:border-b-[0.2px] dark:border-gray-600 z-50">
    <div class="mx-auto mr-8">
        <div class="flex h-16 items-center justify-between 2xl:h-20">
            <div class="flex-1 flex items-center ">
                <button
                    class="flex items-center justify-center mr-3 w-14 min-w-14 h-16 border-r-[1px] cursor-pointer hover:bg-gray-100 dark:hover:bg-[#333b3e] show-sidebar-btn dark:border-gray-600">
                    <svg width="24" height="24" stroke="currentColor" stroke-width="0.01" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg" class="text-gray-600 dark:text-gray-200">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.85719 3H15.1428C16.2266 2.99999 17.1007 2.99998 17.8086 3.05782C18.5375 3.11737 19.1777 3.24318 19.77 3.54497C20.7108 4.02433 21.4757 4.78924 21.955 5.73005C22.2568 6.32234 22.3826 6.96253 22.4422 7.69138C22.5 8.39925 22.5 9.27339 22.5 10.3572V13.6428C22.5 14.7266 22.5 15.6008 22.4422 16.3086C22.3826 17.0375 22.2568 17.6777 21.955 18.27C21.4757 19.2108 20.7108 19.9757 19.77 20.455C19.1777 20.7568 18.5375 20.8826 17.8086 20.9422C17.1008 21 16.2266 21 15.1428 21H8.85717C7.77339 21 6.89925 21 6.19138 20.9422C5.46253 20.8826 4.82234 20.7568 4.23005 20.455C3.28924 19.9757 2.52433 19.2108 2.04497 18.27C1.74318 17.6777 1.61737 17.0375 1.55782 16.3086C1.49998 15.6007 1.49999 14.7266 1.5 13.6428V10.3572C1.49999 9.27341 1.49998 8.39926 1.55782 7.69138C1.61737 6.96253 1.74318 6.32234 2.04497 5.73005C2.52433 4.78924 3.28924 4.02433 4.23005 3.54497C4.82234 3.24318 5.46253 3.11737 6.19138 3.05782C6.89926 2.99998 7.77341 2.99999 8.85719 3ZM6.35424 5.05118C5.74907 5.10062 5.40138 5.19279 5.13803 5.32698C4.57354 5.6146 4.1146 6.07354 3.82698 6.63803C3.69279 6.90138 3.60062 7.24907 3.55118 7.85424C3.50078 8.47108 3.5 9.26339 3.5 10.4V13.6C3.5 14.7366 3.50078 15.5289 3.55118 16.1458C3.60062 16.7509 3.69279 17.0986 3.82698 17.362C4.1146 17.9265 4.57354 18.3854 5.13803 18.673C5.40138 18.8072 5.74907 18.8994 6.35424 18.9488C6.97108 18.9992 7.76339 19 8.9 19H9.5V5H8.9C7.76339 5 6.97108 5.00078 6.35424 5.05118ZM11.5 5V19H15.1C16.2366 19 17.0289 18.9992 17.6458 18.9488C18.2509 18.8994 18.5986 18.8072 18.862 18.673C19.4265 18.3854 19.8854 17.9265 20.173 17.362C20.3072 17.0986 20.3994 16.7509 20.4488 16.1458C20.4992 15.5289 20.5 14.7366 20.5 13.6V10.4C20.5 9.26339 20.4992 8.47108 20.4488 7.85424C20.3994 7.24907 20.3072 6.90138 20.173 6.63803C19.8854 6.07354 19.4265 5.6146 18.862 5.32698C18.5986 5.19279 18.2509 5.10062 17.6458 5.05118C17.0289 5.00078 16.2366 5 15.1 5H11.5ZM5 8.5C5 7.94772 5.44772 7.5 6 7.5H7C7.55229 7.5 8 7.94772 8 8.5C8 9.05229 7.55229 9.5 7 9.5H6C5.44772 9.5 5 9.05229 5 8.5ZM5 12C5 11.4477 5.44772 11 6 11H7C7.55229 11 8 11.4477 8 12C8 12.5523 7.55229 13 7 13H6C5.44772 13 5 12.5523 5 12Z"
                            fill="currentColor"></path>
                    </svg>
                </button>

                <a class="block" href="#">
                    <img class="w-auto min-w-14 h-14 border-none rounded-full 2xl:h-16"
                        src="/assets/images/AlumniLogo.jpg" alt="Logo" />
                </a>
                <div class="ml-2 text-xl font-bold uppercase text-[#273461] dark:text-white">Admin panel</div>
            </div>

            <div class="md:flex md:items-center md:gap-12">

                <div class="flex items-center gap-2 p-2 border-l h-16 pl-10 relative ">
                    <img class="h-11 min-w-11 rounded-full object-cover border border-gray-500 shadow-sm profile-picture cursor-pointer"
                        src="{{ $imageSrc }}" alt="Profile Picture">

                    <!--Start of dropdown button-->
                    <div class="profile-dropdown cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="size-5 stroke-gray-500 dark:stroke-gray-200">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <!--End of dropdown button-->
                    <!--Start of DropDown in Profile-->
                    <div
                        class="hidden absolute top-[63px] right-0 w-60 bg-gray-50 dark:bg-[#252728] shadow-md rounded-b-md 2xl:top-[70px] profile-dropdown-content">
                        <ul class="text-left text-sm text-gray-700">
                            
                            <li
                                class=" h-8 flex  gap-3 items-center cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-7 ml-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <a class="block w-full" href="/client/Settings.html">Account Settings</a>
                            </li>
                            <button class="w-full aprnce-btn">
                                <li
                                    class=" h-8 flex  gap-3 items-center cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-5 ml-4 ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                                    </svg>

                                    <div class="block mr-[70px]">Appearance</div>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-4 aprnce-icon">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </li>
                            </button>
                             <!--start of radio of darkmode-->
                             <div class="aprnce-radio hidden">
                                <ul>
                                    <li
                                        class="h-8 flex gap-3 ml-12 mr-[17px] text-gray-600 justify-between items-center cursor-pointer dark:text-[#E2E5E9]">
                                        <label for="light" class="cursor-pointer">Light</label>
                                        <input type="radio" name="theme" id="light"
                                            class="theme-toggle mr-2 h-4 w-4 border-2  border-gray-600 accent-gray-600 rounded-full">
                                    </li>
                                    <li
                                        class="h-8 flex gap-3 ml-12 mr-[17px] text-gray-600 justify-between items-center cursor-pointer dark:text-[#E2E5E9]">
                                        <label for="dark" class="cursor-pointer">Dark</label>
                                        <input type="radio" name="theme" id="dark"
                                            class="theme-toggle mr-2 h-4 w-4 border-2 border-gray-600 accent-gray-600 rounded-full">
                                    </li>
                                </ul>
                            </div>
                            <!--end of radio of darkmode-->
                            <hr class="border-gray-300 dark:border-[#65686C] mt-2 ">
                            <li
                                class=" h-11 flex gap-3 items-center cursor-pointer rounded-b-md hover:bg-[#273461] hover:text-white dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-7 ml-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>
                                <a class="block w-full" href="/auth/Sign-in.html">Logout</a>
                            </li>


                        </ul>
                    </div>
                    <!--End of DropDown in Profile-->
                </div>
            </div>
        </div>
    </div>
</header>