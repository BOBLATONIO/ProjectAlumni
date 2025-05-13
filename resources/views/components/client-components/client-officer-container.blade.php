@props(['name', 'position', 'pictureSrc', 'message' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Sit amet consectetur adipiscing elit quisque faucibus ex. Adipiscing elit quisque faucibus ex sapien vitae pellentesque.'])

<div class="flex flex-col pb-3 mb-2 md:mb-0 md:pb-0 md:flex-row bg-white dark:bg-[#252728] border dark:border-none rounded-2xl overflow-hidden w-full ">
    <div class="w-full md:w-1/3 ">
        <img src="{{ $pictureSrc }}" alt="Julia Roberts" class="w-full h-full object-cover">
    </div>
    <div class="p-2 md:p-6 w-full md:w-3/4 flex flex-col text-start justify-between">
        <div>
            <h3 class="text-sm md:text-lg font-semibold text-gray-900 dark:text-gray-300">{{ $name }}</h3>
            <span class="text-xs md:text-sm text-blue-500">{{ $position }}</span>
            <p class="text-xs md:text-base text-gray-600 dark:text-gray-400 mt-2 line-clamp-4">
                {{ $message }}
            </p>
        </div>
    </div>
</div>