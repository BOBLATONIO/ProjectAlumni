@props(['question', 'name', 'type' => 'text', 'errmsg' => null])

<div class="question w-full md:w-[600px] lg:w-[700px] bg-white dark:bg-[#252728] shadow-sm p-6 {{ request()->is('profile') ? 'rounded-lg border dark:border-none' : '' }}">
    <p class="text-md text-gray-900 dark:text-gray-300">{{ $question }}<span class="text-red-600 dark:text-red-400 text-xl">  *</span></p>
    <div class="mt-1 text-sm">
        <input 
            class="w-full p-2 rounded-lg  border  border-gray-300 focus:outline-none dark:border-gray-600 text-gray-900 dark:text-gray-400 dark:bg-[#252728] appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" 
            placeholder="Ilagay ang iyong sagot." 
            type="{{ $type }}" 
            name="{{ $name }}"
        >
        <div class="text-xs text-red-600 dark:text-red-400">{{ $errmsg }}</div>
    </div>
    
</div>