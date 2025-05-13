@props(['question', 'name', 'choices' => [], 'errmsg' => null])

<div class="multiple-choice question w-full md:w-[600px] lg:w-[700px] bg-white dark:bg-[#252728] shadow-sm p-6 
{{ request()->is('profile') ? 'rounded-lg border dark:border-none' : '' }}">
    <p class="text-md text-gray-900 dark:text-gray-300">{{ $question }}<span class="text-red-600 dark:text-red-400 text-xl">  *</span></p>
    <div class="mt-2 grid grid-cols-1 lg:grid-cols-2 gap-2 text-sm">
        @foreach ($choices as $choice)
            <label class="flex items-center p-2 border focus:outline-none border-gray-300 dark:border-gray-600 rounded-lg cursor-pointer  transition">
                <input type="radio" name="{{ $name }}" value="{{ $choice }}" class="hidden">
                <span class="text-gray-900 dark:text-gray-400">{{ $choice }}</span>
            </label>
        @endforeach
        <div class="text-xs text-red-600 dark:text-red-400">{{ $errmsg }}</div>
    </div>
   
</div>