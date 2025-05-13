<x-layout.client-layout>
    <div class=" max-w-screen-xl px-6 py-12 mx-auto">
    
    <x-client-components.client-page-header 
    title="Keep Your Alumni Info Updated"
    body="Review and update your survey answers anytime to keep your alumni information accurate and up-to-date."
    />

    <form id="questionnaireForm" class="flex flex-col justify-center items-center w-full ">
        <div class="flex flex-col gap-2 md:mx-5 items-center">
            
            {{-- Select --}}
            <x-client-components.client-question-select name="question 1" question="What is HTML?" :options="[
                'Bachelor of Elementary Education',
                'Bachelor of Secondary Education major in English',
                'Bachelor of Science in Hospitality Management',
                'Bachelor of Science in Tourism Management',
                'Bachelor of Science in Accountancy'
                ]" errmsg="this is how to insert error in this question." />

            {{-- Multiple Choice --}}
            <x-client-components.client-question-multiple-choice question="Piliin ang tamang sagot:"
                name="mutiplechoice1" :choices="[
                'Choice 1',
                'Choice 2',
                'Choice 3',
                'Choice 4'
                ]" errmsg="this is how to insert error in this question." />

            {{-- Short Answer --}}
            <x-client-components.client-question-textinput question="Type: InputText(short)" name="questionNumber"
                type="number" {{-- type text, number, etc --}}
                errmsg="this is how to insert error in this question." />

            {{-- Long Answer --}}
            <x-client-components.client-question-textarea question="Type: TextArea(long)" name="QuestionNumber"
                errmsg="this is how to insert error in this question." />

            <div
                class="flex items-center w-full bg-white dark:bg-[#252728] shadow-md md:w-[600px] lg:w-[700px] mb-6 p-6 py-3 rounded-b-lg justify-between border-t border-gray-300 dark:border-gray-600">
                <div class="flex flex-col">
                    <span class="text-sm text-gray-700 dark:text-gray-300 font-medium ">Ensure all fields are
                        correctly filled before submission.</span>
                    <span class="text-xs text-gray-500 dark:text-gray-400 mt-1 ">Double-check your responses to
                        avoid errors.</span>
                </div>
                {{-- If have change in form --}}
                <button 
                    class="ml-4 text-sm text-gray-900 dark:text-gray-400 hover:underline  ">
                    Clear Changes
                </button>
                {{-- submit button Enable --}}
                <button 
                    class="px-5 -ml-3 md:px-10 py-2 rounded-lg text-white bg-[#4c5a8b] hover:bg-[#6170a7] transition duration-300 shadow-md">
                    Update
                </button>
                {{-- submit button disable --}}
                {{-- <button 
                    class="px-5 -ml-3 md:px-10 py-2 rounded-lg text-gray-400 border bg-gray-100 dark:bg-gray-500 dark:border-none cursor-not-allowed  ">
                    Update
                </button> --}}
            </div>
            
    </form>

    </div>

    @push('scripts')
    <script src="{{ asset('assets/js/surveyform.js') }}"></script>
    @endpush
    
</x-layout.client-layout>