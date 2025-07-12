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
                href="{{ route('admin-manage-alumni') }}">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 sidebar-menu-icon mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                  </svg>
                  
                <span class="mx-2 text-sm whitespace-nowrap sidebar-menu-text "> Manage Alumni</span>
            </a>
            
        </nav>
    </div>
</aside>