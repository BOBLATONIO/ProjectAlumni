<x-layout.client-layout>
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64  bg-white pt-4 shadow-md overflow-y-auto h-[calc(100vh-64px)] fixed">
            <div class=" relative h-full  flex flex-col justify-between">
                <div class="">
                    <div class="flex flex-col gap-1 text-sm">
                        <a
                            class="flex items-center px-6 h-8 relative gap-2 cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <img class="h-7 min-w-7 rounded-full object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                src="{{ asset('assets/images/Profile.jpeg') }}" alt="Profile Picture">
                            <div class="block  w-full" href="{{ route('profile') }}">Profile</div>
                        </a>
                        <a
                            class="flex items-center px-6 h-8 relative gap-2 cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 min-w-6 rounded-full object-cover  dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Zm6-10.125a1.875 1.875 0 1 1-3.75 0 1.875 1.875 0 0 1 3.75 0Zm1.294 6.336a6.721 6.721 0 0 1-3.17.789 6.721 6.721 0 0 1-3.168-.789 3.376 3.376 0 0 1 6.338 0Z" />
                            </svg>
                            <div class="block w-full" href="{{ route('profile') }}">My Alumni ID</div>
                        </a>
                        <a
                            class="flex items-center px-6 h-8 relative gap-2 cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 min-w-6 rounded-full object-cover  dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                            <div class="block  w-full" href="{{ route('profile') }}">Donate Us</div>
                        </a>
                        <a
                            class="flex items-center px-6 h-8 relative gap-2 cursor-pointer hover:bg-gray-200 dark:text-[#E2E5E9] dark:hover:bg-[#3B3D3E]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="h-6 min-w-6 rounded-full object-cover  dark:text-gray-300 dark:hover:text-white  cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                            </svg>
                            <div class="block  w-full" href="{{ route('profile') }}">Help Center</div>
                        </a>



                    </div>

                    <div>
                        <h2 class="px-6 text-sm font-semibold mt-6 mb-3">Upcoming Events</h2>
                        <div class="space-y-2 flex gap-1 flex-col">
                            <a href="{{ route('profile') }}" class="px-6 flex items-center gap-2">
                                <img class="h-11 max-w-11  object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                    src="{{ asset('assets/images/SampleAnnounImage.jpg') }}" alt="Profile Picture">
                                <div class="text-sm max-900:hidden cursor-pointer">
                                    <!--max-900 is a custom css-->
                                    <div
                                        class="font-medium w-36 text-gray-700 dark:text-white overflow-hidden text-ellipsis whitespace-nowrap uppercase">
                                        Board Review</div>
                                    <div
                                        class="text-gray-500 dark:text-gray-200 text-xs w-36 overflow-hidden text-ellipsis whitespace-nowrap">
                                        Sat 16 June, 2025</div>
                                </div>
                            </a>
                            <a href="{{ route('profile') }}" class="px-6 flex items-center gap-2">
                                <img class="h-11 max-w-11  object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                    src="{{ asset('assets/images/SampleAnnounImage.jpg') }}" alt="Profile Picture">
                                <div class="text-sm max-900:hidden cursor-pointer">
                                    <!--max-900 is a custom css-->
                                    <div
                                        class="font-medium w-36 text-gray-700 dark:text-white overflow-hidden text-ellipsis whitespace-nowrap uppercase">
                                        Board Review</div>
                                    <div
                                        class="text-gray-500 dark:text-gray-200 text-xs w-36 overflow-hidden text-ellipsis whitespace-nowrap">
                                        Sat 16 June, 2025</div>
                                </div>
                            </a>
                            <a href="{{ route('profile') }}" class="px-6 flex items-center gap-2">
                                <img class="h-11 max-w-11  object-cover border border-gray-500 dark:text-gray-300 dark:hover:text-white shadow-sm cursor-pointer"
                                    src="{{ asset('assets/images/SampleAnnounImage.jpg') }}" alt="Profile Picture">
                                <div class="text-sm max-900:hidden cursor-pointer">
                                    <!--max-900 is a custom css-->
                                    <div
                                        class="font-medium w-36 text-gray-700 dark:text-white overflow-hidden text-ellipsis whitespace-nowrap uppercase">
                                        Board Review</div>
                                    <div
                                        class="text-gray-500 dark:text-gray-200 text-xs w-36 overflow-hidden text-ellipsis whitespace-nowrap">
                                        Sat 16 June, 2025</div>
                                </div>
                            </a>







                        </div>
                    </div>
                </div>



                <div class="px-6 text-xs text-gray-500 mt-8 pb-4">
                    © 2025 BTECH. All rights reserved.
                </div>
            </div>

        </aside>

        <!-- Main Content -->
        <main class="flex-1  p-6 space-y-6 mx-64 overflow-y-auto h-screen">
            <div class="bg-white p-4 rounded shadow">
                <input type="text" placeholder="What's on your mind?" class="w-full border p-2 rounded" />
            </div>

            <div class="bg-white p-4 rounded shadow">
                <div class="mb-2 font-bold">Robert Hammond is feeling happy</div>
                <p class="text-sm text-gray-600 mb-2">20 min. ago</p>
                <p class="mb-4">My wife prepared a surprise trip for me. I'm so thankful and I love her very much. Here
                    are some of the best shots from our trip to Sri Lanka. 😍</p>
                <div class="grid grid-cols-2 gap-2 mb-4">
                    <img src="https://via.placeholder.com/300x200" class="rounded" />
                    <img src="https://via.placeholder.com/300x200" class="rounded" />
                </div>
                <div class="flex items-center space-x-4 text-sm text-gray-600">
                    <span>👍 Liked <span class="font-bold">230</span></span>
                    <span>💬 Comment <span class="font-bold">6</span></span>
                    <span>↪ Share <span class="font-bold">2</span></span>
                </div>
            </div>

            <div class="bg-white p-4 rounded shadow">
                <div class="mb-2 font-bold">Amelie Shiba created a photo album</div>
                <p class="text-sm text-gray-600 mb-2">Thursday, 17 August 10:40 AM</p>
                <p class="mb-4">I'm selling these clothes. Anyone interested? Or shall we do a swap evening at mine? 😉
                </p>
                <div class="grid grid-cols-4 gap-2">
                    <img src="https://via.placeholder.com/100x100" class="rounded" />
                    <img src="https://via.placeholder.com/100x100" class="rounded" />
                    <img src="https://via.placeholder.com/100x100" class="rounded" />
                    <img src="https://via.placeholder.com/100x100" class="rounded" />
                </div>
            </div>
        </main>

        <!-- Right Sidebar -->
        <aside class="w-72 p-4 space-y-6 overflow-y-auto h-[calc(100vh-64px)] fixed right-0 bottom-0">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-bold mb-2">Your upcoming events</h2>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>Garden BBQ - Sat 16 June, Tom's Garden</li>
                    <li>City Council Vote - Sat 16 June, Town Hall</li>
                    <li>Post-punk Festival - Sat 16 June, Tom's Garden</li>
                    <li>Maybe Boring Stand-up - Sat 16 June, Tom's Garden</li>
                    <li>Yeboncé Tour 2023 - Sat 16 June, Tom's Garden</li>
                </ul>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h2 class="font-bold mb-2">Birthdays</h2>
                <ul class="text-sm text-gray-700 space-y-1">
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                    <li>20 August - Bob Hammond (28 years old)</li>
                    <li>20 August - Haarper Mitchell (21 years old)</li>
                    <li>22 August - Mason Cooper (30 years old)</li>
                    <li>1 September - Isabel Hughes (18 years old)</li>
                </ul>
            </div>
        </aside>
    </div>
    {{-- <div class="relative flex flex-col text-center justify-center w-full lg:max-h-[600px] -mt-16 h-[calc(100vh-110px)] mb-14 
            bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('assets/images/graduatesBG.jpg') }});">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="z-40">

            <h1 class="text-5xl font-bold title-font mb-4 text-gray-50 ">
                Welcome Home, Alumni <br>
            </h1>
            <p class="lg:w-[450px] mx-auto leading-relaxed text-gray-200 text-base ">
                Stay connected, share experiences, and collaborate with fellow alumni to inspire and grow together!
            </p>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-black to-transparent z-0"></div>
        <div class="absolute flex flex-col items-center bottom-6 left-1/2 transform -translate-x-1/2">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-7 h-7 text-gray-100 animate-bounce">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
            </svg>
        </div>
    </div> --}}

    {{-- Network - Feature Section --}}
    {{-- <div class="flex justify-center mb-14">
        <div class="flex flex-col md:flex-row  max-w-screen-xl">
            <div class="md:w-1/2 w-full  text-gray-950 flex items-center px-10 py-16">
                <div>
                    <p class="text-lg text-gray-400">We are creative team</p>
                    <h1 class="text-4xl md:text-5xl font-bold mt-4 leading-tight">
                        Innovative solutions to <br /> boost your projects
                    </h1>
                    <p class="text-gray-400 mt-6 max-w-md">
                        Lorem ipsum dolor sit amet consectetur adipiscing elitdo eiusmod tempor incididunt ut labore
                        dolore
                        magna utenim minim veniam nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                    <button
                        class="mt-8 bg-white text-[#0d1128] font-semibold px-6 py-3 rounded shadow hover:bg-gray-200">
                        View Services
                    </button>
                </div>
            </div>

            <div class="md:w-1/2 w-full">
                <img src="{{ asset('assets/images/network-feature.jpg') }}" alt="Smiling Woman"
                    class="w-full h-full object-cover">
            </div>
        </div>
    </div> --}}

    {{-- <section>
        <div class="mx-auto max-w-screen-xl px-4 bg-gray-50 border rounded-lg py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:items-center md:gap-8">
                <div>
                    <img src="/assets/images/SampleAnnounImage.jpg" class="rounded" alt="" />
                </div>
                <div>
                    <div class="max-w-lg md:max-w-none">
                        <div class="text-sm title-font text-gray-500 tracking-widest">
                            Btech Baliwag
                        </div>
                        <div class="text-2xl font-semibold text-gray-900 uppercase">
                            Libreng Virtual Review para sa Licensure Examination for Teachers
                        </div>

                        <div class="mt-4 text-gray-700 text-sm line-clamp-6" id="textContainer">
                            LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION
                            handog ng Dalubhasaang Politekniko ng Lungsod ng Baliwag (BTECH)
                            Gusto mo bang magtagumpay sa Civil Service Examination mo ngayong Agosto 11,
                            2024? Handa ka na bang harapin ang hamon ng pagiging isang lingkod-bayan?
                            Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                            Examination Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon
                            – 8:30 ng gabi.
                            Ano ang mga aasahan mo?
                            1. Komprehensibong pagsusuri ng mga kahalagahan sa Civil Service Exam
                            2. Masususing Pagsasanay sa mga sumusunod na paksa:
                            • Pag-unawa sa Eksaminasyong Sibil
                            • Talasalitaan at Pagbaybay (Vocabulary and Spelling)
                            • Balarila sa Ingles at Tamang Gamit (Grammar and Correct Usage)
                            • Pagsusuri ng Binabasa (Reading Comprehension)
                            • Sulat Pakikipagtalastasan at Pagsulat ng Sanaysay (Written Communication and
                            Essay Writing)
                            • Operasyong Klerikal (Clerical Operations)
                            • Matematikang Operasyon, Paglutas ng Problema, at Numerikal na Pagsusuri
                            (Mathematical Operations, Problem-solving, and Numerical Reasoning)
                            • Lohikal na Pagsusuri at Analitikal na Kakayahan (Logical Reasoning and
                            Analytical Skills)
                            • Pangkalahatang Kaalaman Tungkol sa Agham, Teknolohiya, at Sining (General
                            Knowledge About Science, Technology, and The Arts)
                            • Mga Kasalukuyang Pangyayari at Mga Napapanahong Isyu (Current Events and
                            Contemporary Issues)
                            • Pamamahala at Pangangalaga sa Kapaligiran (Environment Management &
                            Protection)
                            • Kasaysayan ng Pilipinas, Sistema ng Pamahalaan, at Ang Saligang Batas
                            (Philippine History, Government Systems, and The Constitution)
                            • Pangkalahatang Kaalaman Tungkol sa Agham, Teknolohiya, at Sining (General
                            Knowledge About Science, Technology, and The Arts)
                            • Mga Isyu at Konsepto ng Kapayapaan at Karapatang Pantao (Peace & Human Rights
                            Issues and Concepts)
                            • R.A. 6713: Kodigo ng Pag-uugali at Mga Pamantayang Etikal para sa mga Opisyal
                            at Empleyado ng Pamahalaan (R.A. 6713: Code of Conduct & Ethical Standards for
                            Public Officials & Employees)
                            3. Kasanayan para sa epektibong pagsagot sa mga tanong.
                            Mga Kwalipikasyon at Dokumento na Kailangang Isumite
                            1. Pilipino, Edad 18 pataas
                            2. Nakatala na kukuha ng Civil Service Examination ngayong paparating na Agosto
                            11, 2024
                            3. Kopya ng isang beripikadong pagkakakilanlan (Valid ID)
                            4. Kopya ng iyong NOSA (Notice of School Assignment)
                            5. Larawan ng pagkakakilanlan (Passport Size ID Picture in formal attire & white
                            background)
                            6. Long Brown Envelop
                        </div>
                        <a class="hover:text-blue-400 hover:underline text-sm font-medium">See more</a>

                        <button
                            class="flex items-center justify-center px-5 mt-4 text-gray-600 transition-colors duration-300 transform border rounded-lg hover:bg-gray-100">
                            <div class="flex items-center justify-center pr-2 py-1">
                                <svg class="h-8 w-8 " fill="rgb(23, 107, 251)" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 64 64">
                                    <path
                                        d="M32,6C17.642,6,6,17.642,6,32c0,13.035,9.603,23.799,22.113,25.679V38.89H21.68v-6.834h6.433v-4.548	c0-7.529,3.668-10.833,9.926-10.833c2.996,0,4.583,0.223,5.332,0.323v5.965h-4.268c-2.656,0-3.584,2.52-3.584,5.358v3.735h7.785
                                            l-1.055,6.834h-6.73v18.843C48.209,56.013,58,45.163,58,32C58,17.642,46.359,6,32,6z">
                                    </path>
                                </svg>
                            </div>
                            <span class="text-sm"> View Post </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}














</x-layout.client-layout>