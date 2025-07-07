<x-layout.client-layout>
    <div class="flex flex-col lg:flex-row min-h-screen max-w-screen-xl gap-4 lg:mx-auto ">

        <div
            class="w-full lg:w-1/4   bg-white  dark:bg-[#252728]  shadow-lg lg:max-w-[350px] flex p-8 lg:pt-44 items-center justify-start flex-col text-lg border-b dark:border-[#3A3C3D] lg:border-r-[1px] lg:border-b-0 border-gray-200 lg:fixed lg:h-screen top-0 ">
            <div class="text-4xl text-center text-gray-800 dark:text-gray-200  font-bold mb-4">
                Welcome to <span class="text-[#2655ff] font-semibold">BtechLink!</span>
            </div>
            <div class="w-16 h-1 bg-[#2655ff] rounded-full mb-4"></div>
            <div class="text-sm text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                Your feedback is invaluable in helping us grow and improve. We appreciate your time and insights!
            </div>
            <div class="block text-center text-[10px] text-gray-400 mt-10">
                © 2025 BTECH. All rights reserved.
            </div>
        </div>



        <form id="questionnaireForm" class="flex flex-col justify-start items-center w-full lg:w-3/4 lg:ml-[25%]">
            <div class="flex flex-col gap-2 mx-5 items-center">
                <div
                    class="bg-white dark:bg-[#252728] shadow-lg py-6 mt-6 w-full max-w-xl border-b border-b-gray-300 dark:border-b-gray-600">
                    <div class="text-3xl font-semibold text-gray-900 dark:text-gray-200 px-6">TRACER STUDY</div>
                    <div class="w-full px-6 mt-3">
                        <div class="text-sm text-gray-700 dark:text-gray-400 leading-relaxed">
                            Pahayag ng Pahintulot:
                            Sa pamamagitan ng dokumentong ito, ako ay nagpapahintulot sa Dalubhasaang Politekniko ng
                            Lungsod ng Baliwag na
                            mangolekta, magproseso, at gumamit ng mga datos na nakasaad dito para sa iba pang layuning
                            pang-akademiko.
                            Nauunawaan ko na ang aking personal na impormasyon ay pinoprotektahan ng RA 10173, Batas ng
                            Privacy ng Datos ng 2012.
                        </div>
                        <div class="mt-4 flex items-center gap-2">
                            <input id="concent" type="checkbox" value=""
                                class="w-3.5 h-3.5 text-blue-600 bg-gray-100 dark:bg-[#252728] border-gray-300 rounded-sm dark:border-gray-600">
                            <label for="consent" class="text-sm text-gray-800 dark:text-gray-400">Sumasang-ayon</label>
                        </div>
                    </div>
                </div>

                {{-- dropdown --}}
                <div id="" class="question w-full max-w-xl bg-white dark:bg-[#252728] shadow-sm p-4">
                    <p class="text-base font-medium text-gray-900 dark:text-gray-200 mb-4">
                        Dropdown<span class="text-red-600 text-lg ml-1">*</span>
                    </p>
                    <div class="mt-2 text-sm">
                        <select name=""
                            class="w-full p-2  border border-gray-300 dark:border-gray-600 focus:outline-none rounded-md text-gray-900 dark:text-gray-400 dark:bg-[#252728]">
                            <option class="text-sm" value="" disabled selected>Piliin ang iyong sagot.</option>
                            <option class="text-sm" value="">Option 1</option>
                            <option class="text-sm" value="">Option 2</option>
                        </select>
                        <div class="text-xs mt-1 text-red-600 dark:text-red-400">error</div>
                    </div>
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




    @push('scripts')
    <script src="{{ asset('assets/js/surveyform.js') }}"></script>
    @endpush
</x-layout.client-layout>