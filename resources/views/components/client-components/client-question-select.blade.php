@props(['question', 'name', 'options' => [], 'errmsg' => null])

<div class="question w-full md:w-[600px] lg:w-[700px]  bg-white dark:bg-[#252728] shadow-sm p-6 {{ request()->is('profile') ? 'rounded-lg border dark:border-none' : '' }}">
    <p class="text-md text-gray-900 dark:text-gray-300">{{ $question }}<span class="text-red-600 dark:text-red-400 text-xl">  *</span>
    </p>
    <div class="mt-1 text-sm">
        <select name="{{ $name }}" class="w-full p-2  border border-gray-300 dark:border-gray-600 focus:outline-none rounded-lg text-gray-900 dark:text-gray-400 dark:bg-[#252728]">
            <option class="text-sm" value="" disabled selected>Piliin ang iyong sagot.</option>
            @foreach($options as $option)
                <option class="text-sm" value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
        <div class="text-xs mt-1 text-red-600 dark:text-red-400">{{ $errmsg }}</div>
    </div>
    
</div>