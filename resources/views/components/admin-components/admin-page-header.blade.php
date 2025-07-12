@props(['pageTitle'])

<div class="flex items-center justify-between py-3 -mx-8 px-8 border-b bg-gray-50 ">
    <div>
        <h3 class="text-gray-900 text-lg font-semibold">
            {{ $pageTitle }}
        </h3>
    </div>
    <div class="flex relative items-center text-sm gap-x-2">
        @if (request()->is('admin/sched-del-announcement') || request()->is('admin/pending-announcement') ||
        request()->is('admin/announcement') || request()->is('admin/institute-program') ||
        request()->is('admin/officers') || request()->is('admin/questionnaire'))
        <a href="{{ route('admin-announcement') }}"
            class="block px-4 py-1 font-medium text-center  border-r last:border-none {{ request()->is('admin/pending-announcement') || request()->is('admin/sched-del-announcement') || request()->is('admin/announcement') ? 'text-blue-700' : 'text-gray-900' }}">
            Announcement
        </a>
        <a href="{{ route('admin-officers') }}"
            class="block  px-4 py-1 font-medium text-center border-r last:border-none {{ request()->is('admin/officers') ? 'text-blue-700' : 'text-gray-900' }}">
            Officers
        </a>
        <a href="{{ route('admin-institute-program') }}"
            class="block  px-4 py-1 font-medium text-center border-r last:border-none {{ request()->is('admin/institute-program') ? 'text-blue-700' : 'text-gray-900' }}">
            Institute & Program
        </a>
        <a href="{{ route('admin-questionnaire') }}"
            class="block  px-4 py-1 font-medium text-center  border-r last:border-none {{ request()->is('admin/questionnaire') ? 'text-blue-700' : 'text-gray-900' }}">
            Questionnaire
        </a>

        @endif
        @if (request()->is('admin/manage-alumni') || request()->is('admin/alumni-list'))
        <a href="{{ route('admin-manage-alumni') }}"
            class="block  px-4 py-1 font-medium text-center  border-r last:border-none {{ request()->is('admin/manage-alumni') ? 'text-blue-700' : 'text-gray-900' }}">
            Account
        </a>
        <a href="{{ route('admin-alumni-list') }}"
            class="block  px-4 py-1 font-medium text-center  border-r last:border-none {{ request()->is('admin/alumni-list') ? 'text-blue-700' : 'text-gray-900' }}">
            Alumni List
        </a>
        @endif

    </div>
</div>