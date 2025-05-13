@props(['name', 'time', 'message'])

<div class="flex items-start gap-2.5">
    <div class="flex flex-col w-full px-2  leading-1.5 border-gray-200 dark:bg-gray-700">
        <div class="flex items-center space-x-2 mt-1 rtl:space-x-reverse">
            <span class="text-sm font-semibold  text-gray-900 dark:text-white">{{ $name }}</span>
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">{{ $time }}</span>
        </div>
        <p class="text-sm font-normal my-2 text-gray-900 dark:text-white">{{ $message }}</p>
    </div>
</div>