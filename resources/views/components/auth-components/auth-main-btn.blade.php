@props([
    'text',  
    'type' => 'submit'
])

<div class="mt-4">
    <button type="{{ $type }}"
      class="w-full px-6 py-[10px] text-md font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-[#273461] rounded-lg hover:bg-[#304384] focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">
      {{ $text }}
    </button>
</div>