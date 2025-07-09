@props(['pageTitle'])

<div class="flex items-center justify-between py-3 -mx-8 px-8 border-b bg-gray-50 ">
    <div>
        <h3 class="text-gray-900 text-lg font-semibold">
            {{ $pageTitle }}
        </h3>
    </div>
    <div class="flex relative items-center text-sm gap-x-2">
        @if (request()->is('admin/announcement') || request()->is('admin/institute-program') || request()->is('admin/officers'))
             <a href="{{ route('admin-announcement') }}"
            class="block px-4 py-2 font-medium text-center  border-r last:border-none {{ request()->is('admin/announcement') ? 'text-blue-700' : 'text-gray-900' }}">
            Announcement
        </a>
        <a href="{{ route('admin-officers') }}"
            class="block  px-4 py-2 font-medium text-center border-r last:border-none {{ request()->is('admin/officers') ? 'text-blue-700' : 'text-gray-900' }}">
            Officers
        </a>
        <a href="{{ route('admin-institute-program') }}"
            class="block  px-4 py-2 font-medium text-center border-r last:border-none {{ request()->is('admin/institute-program') ? 'text-blue-700' : 'text-gray-900' }}">
            Institute & Program
        </a>
        <a href=""
            class="block  px-4 py-2 font-medium text-center text-gray-900 border-r last:border-none">
            Questionnaire
        </a>
        <a href=""
            class="block  px-4 py-2 font-medium text-center text-gray-900 border-r last:border-none">
            FAQ
        </a>
        @endif
       
    </div>
</div>