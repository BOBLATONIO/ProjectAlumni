@props(['title', 'author', 'delSched', 'imgSrc' => 'https://dummyimage.com/70x70'])


<div class="h-20 flex text-xs items-center border-gray-200 border p-2 rounded-lg">
    <img alt="annoucement-image"
        class="w-16 h-16 bg-gray-100 object-cover object-center rounded-md flex-shrink-0 mr-3"
        src="{{ asset($imgSrc) }}">
    <div class="flex-grow">
        <div class="text-gray-500 line-clamp-1">{{ $author }}</div>
        <div class="text-gray-900 font-medium line-clamp-2">{{ $title }}</div>
        <div class="text-red-500">{{ $delSched }}</div>
    </div>
</div>