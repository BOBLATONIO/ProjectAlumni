<x-layout.client-layout>
    <div class="flex flex-col lg:flex-row min-h-screen max-w-screen-xl gap-4 lg:mx-auto ">

        <div
            class="w-full lg:w-1/4   bg-white  dark:bg-[#252728]  shadow-lg lg:max-w-[350px] flex p-8 lg:pt-44 items-center justify-start flex-col text-lg border-b dark:border-[#3A3C3D] lg:border-r-[1px] lg:border-b-0 border-gray-200 lg:fixed lg:h-screen top-0 ">
            <div class="text-4xl text-center text-gray-800 dark:text-gray-200  font-bold mb-4">
                Welcome to <span class="text-[#2655ff] font-semibold">BtechLink!</span>
            </div>
            <div class="w-16 h-1 bg-[#2655ff] rounded-full mb-4"></div>
            <p class="text-sm text-gray-600 dark:text-gray-300 text-center leading-relaxed">
                Your feedback is invaluable in helping us grow and improve. We appreciate your time and insights!
            </p>
            <p class="block text-center text-[10px] text-gray-400 mt-10">
                © 2025 BTECH. All rights reserved.
            </p>
        </div>



        <form id="questionnaireForm" class="flex flex-col justify-center items-center w-full lg:w-3/4 lg:ml-[25%]">
            <div class="flex flex-col gap-2 mx-5 items-center">
                <div
                    class="bg-white dark:bg-[#252728] shadow-lg py-6 mt-6 w-full md:w-[600px] lg:w-[700px] max-w-[800px] rounded-t-lg border-t-8 border-[#273461] border-b border-b-gray-300 dark:border-b-gray-600">
                    <div class="text-3xl font-semibold text-gray-900 dark:text-gray-200 px-6">TRACER STUDY</div>
                    <div class="w-full px-6 mt-3">
                        <p class="text-sm text-gray-700 dark:text-gray-400 leading-relaxed">
                            <span class="font-bold ">Pahayag ng Pahintulot:</span>
                            Sa pamamagitan ng dokumentong ito, ako ay nagpapahintulot sa Dalubhasaang Politekniko ng
                            Lungsod ng Baliwag na
                            mangolekta, magproseso, at gumamit ng mga datos na nakasaad dito para sa iba pang layuning
                            pang-akademiko.
                            Nauunawaan ko na ang aking personal na impormasyon ay pinoprotektahan ng RA 10173, Batas ng
                            Privacy ng Datos ng 2012.
                        </p>
                        <div class="mt-4 flex items-center gap-2">
                            <input id="concent" type="checkbox" value=""
                                class="w-3.5 h-3.5 text-blue-600 bg-gray-100 dark:bg-[#252728] border-gray-300 rounded-sm dark:border-gray-600">
                            <label for="consent" class="text-sm text-gray-800 dark:text-gray-400">Sumasang-ayon</label>
                        </div>
                    </div>
                </div>



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