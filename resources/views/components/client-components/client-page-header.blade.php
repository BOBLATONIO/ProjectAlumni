@props(['title', 'body'])

<div class="mb-10 text-center">
    <h2 class="text-3xl  font-bold text-[#273461] dark:text-[#5a7eff]">{{ $title }}</h2>
    <p class="text-gray-600 dark:text-gray-400 mt-2 max-w-2xl mx-3 lg:mx-auto">
        {{ $body }}
    </p>
</div>