@props(['question' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit?', 'answer' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Consectetur adipiscing elit quisque faucibus ex sapien vitae. Ex sapien vitae pellentesque sem placerat in id. Placerat in id cursus mi pretium tellus duis. Pretium tellus duis convallis tempus leo eu aenean.'])

<div class="faq-card bg-white rounded-lg border">
    <div class="faq-header cursor-pointer flex justify-between items-center p-4">
        <span class="question text-md">{{ $question }}</span>
        <i class="transition-transform duration-300 transform">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>                      
        </i>
    </div>
    <div class="faq-content hidden text-sm px-4 pb-4 -mt-1 text-gray-700">
        {{ $answer }}
    </div>
</div>