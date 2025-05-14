@props(['name', 'email', 'imageSrc'])


<header
        class="bg-gray-50 fixed top-0 left-0 w-full shadow-md z-50 dark:bg-[#252728] dark:border-y-[0.2px] dark:border-gray-600">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between 2xl:h-20">
                <div class="flex-1 flex items-center ">
                    {{-- add href if the request is not questionnaire --}}
                    <a class="block" {{ !request()->is('questionnaire') ? 'href='.route('home') : '' }}>
                        <img class="w-auto min-w-14 h-14 border-none rounded-full 2xl:h-16 "
                            src="{{ asset('assets/images/AlumniLogo.jpg') }}" alt="Logo" />
                    </a>
                    <a {{ !request()->is('questionnaire') ? 'href='.route('home') : '' }}
                        class="ml-2 text-xl font-bold uppercase text-[#273461] dark:text-gray-200 md:hidden custom-1110:block">
                        BTECH
                        ALUMNI
                    </a>

                </div>

                <div class="md:flex md:items-center md:gap-12">
                    {{-- display navbar if the request is not questionnaire --}}
                    @if (!request()->is('questionnaire'))
                    <nav aria-label="Global Navigation" class="hidden md:block">
                        <ul class="navbar-ul flex items-center gap-8 text-sm font-medium">
                            <li>
                                <a class=" transition  dark:hover:text-white  whitespace-nowrap     
                                {{ request()->is('home') ? 'text-[#273461]  font-semibold dark:text-white' : 'hover:text-gray-500 text-gray-700 dark:text-gray-300' }}"
                                    href="{{ route('home') }}">Home</a>
                                <span
                                    class=" h-[2px] w-9 bg-[#273461] dark:bg-white mx-auto mt-1 mb-[-5px]
                                    {{ request()->is('home') ? 'block' : 'hidden' }}"></span>
                            </li>
                            <li>
                                <a class=" transition  dark:hover:text-white  whitespace-nowrap     
                                {{ request()->is('profile') ? 'text-[#273461]  font-semibold dark:text-white' : 'hover:text-gray-500 text-gray-700 dark:text-gray-300' }}"
                                    href="{{ route('profile') }}">Profile</a>
                                <span
                                    class=" h-[2px] w-10 bg-[#273461] dark:bg-white mx-auto mt-1 mb-[-5px]
                                    {{ request()->is('profile') ? 'block' : 'hidden' }}"></span>
                            </li>
                            <li>
                                <a class=" transition dark:hover:text-white  whitespace-nowrap     
                                {{ request()->is('announcement') ? 'text-[#273461]  font-semibold dark:text-white' : 'hover:text-gray-500 text-gray-700 dark:text-gray-300' }}"
                                    href="{{ route('announcement') }}">Announcement</a>
                                <span
                                    class=" h-[2px] w-[100px] bg-[#273461] dark:bg-white mx-auto mt-1 mb-[-5px]
                                    {{ request()->is('announcement') ? 'block' : 'hidden' }}"></span>
                            </li>
                            <li>
                                <a class=" transition dark:hover:text-white  whitespace-nowrap     
                                {{ request()->is('network') ? 'text-[#273461]  font-semibold dark:text-white' : 'text-gray-700 hover:text-gray-500 dark:text-gray-300' }}"
                                    href="{{ route('network') }}">Network</a>
                                <span
                                    class=" h-[2px] w-14 bg-[#273461] dark:bg-white mx-auto mt-1 mb-[-5px]
                                    {{ request()->is('network') ? 'block' : 'hidden' }}"></span>
                            </li>
                            <li>
                                <a class=" transition dark:hover:text-white  whitespace-nowrap     
                                {{ request()->is('officers') ? 'text-[#273461]  font-semibold dark:text-white' : 'hover:text-gray-500 text-gray-700 dark:text-gray-300' }}"
                                    href="{{ route('officers') }}">Officers</a>
                                <span
                                    class=" h-[2px] w-14 bg-[#273461] dark:bg-white mx-auto mt-1 mb-[-5px]
                                    {{ request()->is('officers') ? 'block' : 'hidden' }}"></span>
                            </li>
                            <li>
                                <a class=" transition  dark:hover:text-white  whitespace-nowrap     
                                {{ request()->is('about-us') ? 'text-[#273461]  font-semibold dark:text-white' : 'text-gray-700 dark:text-gray-300 hover:text-gray-500' }}"
                                    href="{{ route('about-us') }}">About Us</a>
                                <span
                                    class=" h-[2px] w-16 bg-[#273461] dark:bg-white mx-auto mt-1 mb-[-5px]
                                    {{ request()->is('about-us') ? 'block' : 'hidden' }}"></span>
                            </li>
                        </ul>
                    </nav>
                    @endif
                    

                    <div class="hidden md:flex items-center gap-2 p-2 rounded-lg relative ">
                        <img class="h-11 min-w-11 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm profile-picture cursor-pointer"
                            src="{{ asset($imageSrc) }}" alt="Profile Picture">
                        <div class="text-sm max-900:hidden name-container cursor-pointer">
                            <!--max-900 is a custom css-->
                            <div
                                class="font-medium w-36 text-gray-700 dark:text-white overflow-hidden text-ellipsis whitespace-nowrap uppercase">
                                {{ $name }}</div>
                            <div
                                class="text-gray-500 dark:text-gray-200 text-xs w-36 overflow-hidden text-ellipsis whitespace-nowrap">
                                {{ $email }}</div>
                        </div>
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
                            class="hidden absolute top-[63px] right-0 w-60 bg-gray-50 shadow-md rounded-b-md 2xl:top-[72px] dark:bg-[#252728] profile-dropdown-content ">
                            <ul class="text-left text-sm text-gray-700">
                                {{-- display settings, alumniID, helpcenter if the request is not questionnaire --}}
                                @if (!request()->is('questionnaire'))
                                <li
                                    class="  h-8 flex items-center relative gap-3 mt-1 cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-7 ml-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                                    </svg>

                                    <a class="block  w-full" href="{{ route('alumni-id') }}">My Alumni ID</a>
                                </li>
                                <li
                                    class=" h-8 flex  gap-3 items-center cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-7 ml-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>

                                    <a class="block w-full" href="{{ route('account-settings') }}">Account Settings</a>
                                </li>
                                <li
                                class=" h-8 flex  gap-3 items-center cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                               
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7 ml-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                  </svg>
                                  

                                <a class="block w-full" href="{{ route('donate-us') }}">Donate Us</a>
                            </li>
                                <li
                                    class=" h-8 flex gap-3 items-center cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-7 ml-4 ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                                    </svg>

                                    <a class="block w-full" href="{{ route('help-center') }}">Help Center</a>
                                </li>
                                @endif
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



                    <!-- Mobile HAMBURGER MENU BTN -->
                    <div class="block md:hidden">
                        <button class="menu-btn rounded-sm p-2  hover:bg-gray-200 dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 stroke-gray-600 dark:stroke-gray-200"
                                fill="none" viewBox="0 0 24 24" stroke="" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <!-- START OF Mobile Dropdown Menu (HAMBURGER MENU)-->
                    <div
                        class="mobile-menu hidden absolute top-[65px] right-0 w-full bg-gray-50 dark:bg-[#252728] shadow-lg p-2 pt-1">
                        <ul class="text-left text-md font-light text-gray-800 dark:text-[#E2E5E9] ">
                            {{-- display mobile navbar if the request is not questionnaire --}}
                            @if (!request()->is('questionnaire'))
                            <li
                                class="px-4 py-2 flex items-center gap-3 cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md ">
                                <a class="block w-full" href="{{ route('home') }}">Home</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center gap-3 cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center gap-3 cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('announcement') }}">Announcement</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center gap-3 cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('network') }}">Network</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center gap-3 cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('officers') }}">Officers</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center gap-3 cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('about-us') }}">About Us</a>
                            </li>
                            @endif
                            <li
                                class="flex items-center gap-3 px-4 py-3 mt-2 border-t border-gray-300 dark:border-[#65686C]">
                                <img class="h-12 w-12 rounded-full object-cover border border-gray-300 shadow-sm"
                                    src="{{ asset($imageSrc) }}" alt="Profile Picture">
                                <div>
                                    <div class="font-medium text-gray-700 dark:text-white uppercase">{{ $name }}</div>
                                    <div class="text-gray-500 dark:text-gray-200 text-xs">{{ $email }}</div>
                                </div>
                            </li>
                            {{-- display alumniID, helpcenter, settings if the request is not questionnaire --}}
                            @if (!request()->is('questionnaire'))
                            <li
                                class="px-4 py-2 flex items-center  cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('alumni-id') }}">My Alumni ID</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center  cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('account-settings')}}">Account Settings</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center  cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('donate-us') }}">Donate Us</a>
                            </li>
                            <li
                                class="px-4 py-2 flex items-center  cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block w-full" href="{{ route('help-center') }}">Help Center</a>
                            </li>
                            @endif
                            <li
                                class="px-4 py-2 flex items-center justify-between cursor-pointer hover:bg-gray-200 dark:hover:dark:hover:bg-[#3B3D3E] transition-all rounded-md">
                                <a class="block" >Dark Theme</a>

                                <div class="flex items-center justify-between">
                                    <div class="h-5 w-[1px] bg-gray-400 dark:bg-[#65686C] mr-8"></div>

                                    <label class="inline-flex items-center mr-2 cursor-pointer lg:hidden">
                                        <input type="checkbox" id="mobileThemeToggle" class="sr-only peer">
                                        <div
                                            class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white dark:after:bg-[#273461] after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-[#273461] dark:peer-checked:bg-gray-200">
                                        </div>
                                    </label>
                                </div>

                            </li>
                            

                            <hr class="border-gray-300 dark:border-[#65686C] my-2">
                            <li
                                class="px-6 py-3 -mx-2 -my-2 flex items-center  cursor-pointer rounded-b-md hover:bg-[#273461] hover:text-white dark:hover:bg-[#3B3D3E] transition-all">
                                <button class="block w-full text-start" href="/auth/Sign-in.html">Logout</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>