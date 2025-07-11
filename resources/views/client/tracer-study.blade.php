<x-layout.client-layout>
    <div class=" max-w-screen-xl pt-12 mx-auto">

        <x-client-components.client-page-header title="Keep Your Alumni Info Updated"
            body="Review and update your survey answers anytime to keep your alumni information accurate and up-to-date." />

        <form id="questionnaireForm" class="flex flex-col justify-start items-center w-full">
            <div class="flex flex-col gap-2 mx-5 items-center">


                {{-- Dropdown --}}
                <div id="questionDropdown"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">

                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-2">
                        Dropdown Question<span class="text-red-600 text-lg ml-1">*</span>
                    </p>

                    <select name="dropdown_answer"
                        class="w-full px-3 py-2 text-sm rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-[#252728] text-gray-900 dark:text-gray-200  focus:outline-none">
                        <option value="" disabled selected>Piliin ang iyong sagot.</option>
                        <option value="option1">Option 1</option>
                        <option value="option2">Option 2</option>
                        <option value="option3">Option 3</option>
                    </select>

                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400 hidden">This question is required.</div>
                </div>


                {{-- multiple choice --}}
                <div id="question1"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-4">
                        Multiple Choice<span class="text-red-600 text-lg ml-1">*</span>
                    </p>
                    <div class="space-y-4 text-gray-800 dark:text-gray-300">

                        <label class="flex items-start gap-3">
                            <input type="radio" name="question1" value="option1"
                                class="mt-1 shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm leading-6">Option 1</span>
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="radio" name="question1" value="option2"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Option 2</span>
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="radio" name="question1" value="option3"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Option 3</span>
                        </label>
                    </div>

                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400">This question is required.</div>
                </div>

                {{-- Multiple Choice with other input --}}
                <div id="question1"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-4">
                        Multiple Choice w Other INPUT<span class="text-red-600 text-lg ml-1">*</span>
                    </p>
                    <div class="space-y-4 text-gray-800 dark:text-gray-300">
                        <label class="flex items-start gap-3">
                            <input type="radio" name="question1" value="option1"
                                class="mt-1 shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm leading-6">Option 1</span>
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="radio" name="question1" value="option2"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Option 2</span>
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="radio" name="question1" value="option3"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Option 3</span>
                        </label>

                        <label class="flex items-center gap-3">
                            <input type="radio" name="question1" value="other"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Other:</span>
                            <input type="text" name="question1_other" placeholder=""
                                class="border-b border-gray-300 dark:border-gray-600 focus:outline-none focus:border-purple-600 text-sm flex-1 bg-transparent py-1 px-1">
                        </label>
                    </div>

                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400">This question is required.</div>
                </div>

                {{-- multiple answer (checkbox) --}}
                <div id="question2"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">

                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-4">
                        Multiple Answer<span class="text-red-600 text-lg ml-1">*</span>
                    </p>

                    <div class="space-y-4 text-gray-800 dark:text-gray-300">
                        <label class="flex items-start gap-3">
                            <input type="checkbox" name="question2[]" value="option1"
                                class="mt-1 shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm leading-6">Option 1</span>
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="checkbox" name="question2[]" value="option2"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Option 2</span>
                        </label>
                        <label class="flex items-center gap-3">
                            <input type="checkbox" name="question2[]" value="option3"
                                class="shrink-0 w-5 h-5 text-purple-600 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600">
                            <span class="text-sm">Option 3</span>
                        </label>
                    </div>

                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400">This question is required.</div>
                </div>

                {{-- short text input --}}
                <div id="question3"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-4">
                        Short Answer<span class="text-red-600 text-lg ml-1">*</span>
                    </p>
                    <div class="text-gray-800 dark:text-gray-300">
                        <input type="text" name="question3"
                            class="w-full border-b border-gray-300 dark:border-gray-600 focus:outline-none focus:border-purple-600 text-sm bg-transparent py-1 px-1 text-gray-900 dark:text-gray-100"
                            placeholder="Type your answer here">
                    </div>

                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400">This question is required.</div>
                </div>

                {{-- long answer input --}}
                <div id="question4"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-4">
                        Long Answer<span class="text-red-600 text-lg ml-1">*</span>
                    </p>
                    <div class="text-gray-800 dark:text-gray-300">
                        <textarea name="question4" rows="5"
                            class="w-full border-b border-gray-300 dark:border-gray-600 focus:outline-none focus:border-purple-600 text-sm bg-transparent py-1 px-1 text-gray-900 dark:text-gray-100 resize-none"
                            placeholder="Write your answer here..."></textarea>
                    </div>
                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400">This question is required.</div>
                </div>

                {{-- file upload with description --}}
                <div id="question5"
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">

                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-2">
                        File Upload<span class="text-red-600 text-lg ml-1">*</span>
                    </p>

                    <p class="text-xs mt-1 text-gray-600 dark:text-gray-400 mb-1">
                        Upload your file in PDF format. Max file size: 2MB.
                    </p>
                    <div class="text-gray-800 dark:text-gray-300">
                        <input type="file" name="question5" accept=".htm"
                            class="w-full text-sm text-gray-700 dark:text-gray-200
                   file:mr-4 file:py-2 file:px-4 
                   file:rounded-md file:border-0 file:text-sm file:font-semibold
                   file:bg-gray-200 file:text-blue-700
                   hover:file:bg-purple-100
                   dark:file:bg-[#252728] dark:file:border dark:file:border-solid dark:file:border-gray-600  dark:file:text-gray-200  file:cursor-pointer">
                    </div>

                    <!-- Error message -->
                    <div class="text-xs mt-2 text-red-600 dark:text-red-400">This question is required.</div>
                </div>

                {{-- Section Title with description --}}
                <div
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200">
                        Section Title with description
                    </p>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                        Description..
                    </p>
                </div>

                {{-- Section Title --}}
                <div
                    class="w-full max-w-xl bg-white dark:bg-[#252728] p-4 rounded-md shadow-sm border border-gray-200 dark:border-gray-700">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200">
                        Section Title
                    </p>
                </div>

                <div
                    class="flex items-center w-full bg-white dark:bg-[#252728] shadow-md max-w-xl  mb-6 p-6 py-3 rounded-b-lg justify-between border-t border-gray-300 dark:border-gray-600">
                    <div class="flex flex-col">
                        <span class="text-sm text-gray-700 dark:text-gray-300 font-medium ">Ensure all fields are
                            correctly filled before submission.</span>
                        <span class="text-xs text-gray-500 dark:text-gray-400 mt-1 ">Double-check your responses to
                            avoid errors.</span>
                    </div>
                    <button type="submit"
                        class="px-5 ml-4 md:px-10 py-2 rounded-lg text-white bg-[#4c5a8b] hover:bg-[#6170a7] transition duration-300 shadow-md">
                        Submit
                    </button>
                </div>
        </form>

    </div>

    {{-- @push('scripts')
    <script src="{{ asset('assets/js/surveyform.js') }}"></script>
    @endpush --}}

</x-layout.client-layout>