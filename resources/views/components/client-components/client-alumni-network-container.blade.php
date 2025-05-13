@props(['name', 'pictureSrc'])

<div class="h-full flex items-center bg-white dark:bg-[#252728] border dark:border-none p-3 rounded-lg">
    <img alt="team" class="w-16 h-full bg-gray-100 object-cover object-center rounded-md flex-shrink-0 mr-4" src="{{ asset($pictureSrc) }}">
    <div class="flex-grow text-start">
        <div class="text-gray-900 dark:text-gray-400">{{ $name }}</div>
    </div>
</div>   