@props(['announcementHeader'])

<div class="w-full  rounded-md max-w-[700px] mb-4">
    <div class="flex items-center justify-between w-full ">
        <div>
            <div class="text-lg font-semibold">{{ $announcementHeader }}</div>
        </div>
        @if (request()->is('admin/announcement'))
        <button
            class="bg-gray-200 hover:bg-gray-300 border-gray-300 border text-sm py-2 px-4 rounded-md flex items-center">
            Create new post
        </button>
        @endif

    </div>
</div>