@props(['message', 'href', 'linkText'])

<div class="mt-3 flex justify-center items-center">
    <p class="text-xs text-gray-700">
        {{ $message }}
        <a class="text-xs text-blue-500 cursor-pointer hover:underline" href="{{ $href }}">
            {{ $linkText }}
        </a>
    </p>
</div>