@props(['name', 'position', 'profileSrc'])

<div class="w-full text-sm">
    <div class="h-full flex items-center border-gray-200 border p-2 rounded-lg">
        <img alt="team"
            class="w-14 h-14 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-3"
            src="{{ asset($profileSrc) }}">
        <div class="flex-grow">
            <div class="text-gray-900 font-medium">{{ $name }}</div>
            <div class="text-gray-500">{{ $position }}</div>
        </div>
    </div>
</div>