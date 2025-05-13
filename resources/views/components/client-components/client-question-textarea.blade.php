@props(['question', 'name', 'errmsg' => null])

<div class="question w-full md:w-[600px] lg:w-[700px] bg-white dark:bg-[#252728] shadow-sm p-6 {{ request()->is('profile') ? 'rounded-lg border dark:border-none' : '' }}">
    <p class="text-md text-gray-900 dark:text-gray-300">{{ $question }}<span class="text-red-600 dark:text-red-400 text-xl">  *</span></p>
    <div class="mt-1 text-sm">
        <textarea 
            class="w-full h-32 p-3 pb-3 rounded-lg border  border-gray-300 focus:outline-none dark:border-gray-600 text-gray-900 dark:text-gray-400 dark:bg-[#252728] resize-none" 
            placeholder="Ilagay ang iyong sagot." 
            name="{{ $name }}"
        ></textarea>
        <div class="text-xs text-red-600 dark:text-red-400">{{ $errmsg }}</div>
    </div>
    
</div>