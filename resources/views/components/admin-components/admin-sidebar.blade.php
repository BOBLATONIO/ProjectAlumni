<aside
    class="flex flex-col w-64 py-8 pt-0 h-full overflow-y-auto bg-gray-50 dark:bg-[#252728]  border-r dark:border-r-[0.2px] dark:border-gray-600 rtl:border-r-0 rtl:border-l collapsed transition-[width] duration-300 ease-liner sidebar">
    <div class="flex flex-col w-full justify-between mt-4 overflow-hidden">
        <nav class="">
            <a class="flex items-center pl-5 w-full py-2  text-gray-700 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                </svg>
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text ">Dashboard</span>
            </a>
            <a class="flex items-center pl-5 w-full py-2  text-gray-700  hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-statsanalytics') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 14.25v2.25m3-4.5v4.5m3-6.75v6.75m3-9v9M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                </svg>
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text ">Statistics &
                    Analytics</span>
            </a>
            <a class="flex items-center pl-5 w-full py-2  text-gray-700  hover:bg-gray-200  dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-response') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <rect x="3" y="4" width="18" height="16" rx="2" ry="2" stroke="currentColor" stroke-width="1.5"
                        fill="none" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8h7.5M9 12h4.5M9 16h2.5" />
                    <circle cx="6" cy="8" r="0.5" fill="currentColor" />
                    <circle cx="6" cy="12" r="0.5" fill="currentColor" />
                    <circle cx="6" cy="16" r="0.5" fill="currentColor" />
                </svg>
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text ">Manage Response</span>
            </a>


            {{-- <div class="group">
                <a
                    class="flex items-center pl-5 w-full py-2 text-gray-800 hover:bg-gray-200  cursor-pointer dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                    </svg>
                    <span class="mx-2 text-sm font-medium whitespace-nowrap sidebar-menu-text">Manage Content</span>
                </a>
                <div class="hidden group-hover:block text-sm">
                    <a class="block py-2 pl-14 text-gray-600 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]" href="#">Add Content</a>
                    <a class="block py-2 pl-14 text-gray-600 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]" href="#">Edit Content</a>
                    <a class="block py-2 pl-14 text-gray-600 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]" href="#">Delete Content</a>
                </div>
            </div> --}}


            <a class="flex items-center pl-5 w-full py-2  text-gray-700 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-announcement') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                </svg>
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text "> Manage Content</span>
            </a>
            <a class="flex items-center pl-5 w-full py-2  text-gray-700 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-questionnaire') }}">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                  </svg>
                  
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text ">Questionnaire</span>
            </a>

            <a class="flex items-center pl-5 w-full py-2  text-gray-700 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-alumniaccount') }}">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                  </svg>
                  
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text "> Manage Alumni Account</span>
            </a>
            {{-- <a class="flex items-center pl-5 w-full py-2  text-gray-700 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-institute-program') }}">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                  </svg>
                  
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text ">Institute and Program</span>
            </a> --}}
            {{-- <a class="flex items-center pl-5 w-full py-2  text-gray-700 hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E] a-pages"
                href="{{ route('admin-officers') }}">

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                  </svg>
                  
                  
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text ">Manage Officers</span>
            </a> --}}
        </nav>
    </div>
</aside>