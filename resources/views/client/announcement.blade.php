<x-layout.client-layout>
    <div class=" max-w-screen-xl px-6 py-12 mx-auto">
        
        {{-- <x-client-components.client-page-header 
        title="Your Official Alumni ID"
        body="Stay informed and never miss out on important updates. Our announcements keep you in the loop with the latest
    news, events, and essential information to help you stay connected and engaged with our community."
      /> --}}

        <div class="annoucement-container mt-8 mx-auto flex flex-col items-center">
            {{-- <div class="flex flex-col gap-5">
                <div class="announcement max-w-[700px] w-full bg-white shadow-md rounded-lg p-4">
                    <div class="flex items-center space-x-3">
                        <div>
                            <div class="flex justify-between">
                                <div class="text-sm title-font text-gray-500 mb-1">
                                    <span>Institute of Information Technology and Innovation</span> • <span>8h</span>
                                </div>
                                
                            </div>
                            <div class="text-2xl font-semibold leading-none text-gray-900 uppercase mr-4">
                                Libreng Virtual Review para sa Licensure Examination for Teachers
                            </div>
                        </div>
                    </div>
    
                    <!-- Description -->
                    <p class="announcementBody text-gray-700 text-sm mt-3  line-clamp-3 -mb-1 overflow-hidden ">
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                    </p>
                    <!-- This <button> tag will be hidden if the announcement body is too short or does not exceed the set length limit. -->
                    <button class="toggleButton hover:text-blue-400 hover:underline text-xs font-medium hidden">
                        See more
                    </button>
                    <!-- This <a> tag will be hidden if its href attribute is empty or not defined -->
                    <a href="hello" rel="noopener" target="_blank"
                        class="facebook-link block text-xs text-blue-600 hover:underline">
                        View original post on facebook.
                    </a>
                    <div class="mt-2">
                        <img src="https://dummyimage.com/500x500" alt="Post Image"
                            class="w-full rounded-lg border border-indigo-300 hover:shadow-lg transition cursor-pointer">
                    </div>
                </div>
                <div class="announcement max-w-[700px] w-full bg-white shadow-md rounded-lg p-4">
                    <div class="flex items-center space-x-3">
                        <div>
                            <div class="flex justify-between">
                                <div class="text-sm title-font text-gray-500 mb-1">
                                    <span>Institute of Information Technology and Innovation</span> • <span>8h</span>
                                </div>
                                
                            </div>
                            <div class="text-2xl font-semibold leading-none text-gray-900 uppercase mr-4">
                                Libreng Virtual Review para sa Licensure Examination for Teachers
                            </div>
                        </div>
                    </div>
    
                    <!-- Description -->
                    <p class="announcementBody text-gray-700 text-sm mt-3  line-clamp-3 -mb-1 overflow-hidden ">
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                        LIBRENG REVIEW PARA SA CIVIL SERVICE EXAMINATION handog ng Dalubhasaang Politekniko
                        ng
                        Lungsod ng Baliwag (BTECH) Gusto mo bang magtagumpay sa Civil Service Examination mo
                        ngayong Agosto 11, 2024? Handa ka na bang harapin ang hamon ng pagiging isang
                        lingkod-bayan?
                        Para sa lahat ng interesado, inaanyayahan namin kayo sa LIBRENG Civil Service
                        Examination
                        Virtual Review ngayong Hulyo 5, 2024 – Agosto 9, 2024, 5:30 ng hapon – 8:30 ng gabi.
                    </p>
                    <!-- This <button> tag will be hidden if the announcement body is too short or does not exceed the set length limit. -->
                    <button class="toggleButton hover:text-blue-400 hover:underline text-xs font-medium hidden">
                        See more
                    </button>
                    <!-- This <a> tag will be hidden if its href attribute is empty or not defined -->
                    <a href="hello" rel="noopener" target="_blank"
                        class="facebook-link block text-xs text-blue-600 hover:underline">
                        View original post on facebook.
                    </a>
                    <div class="mt-2">
                        <img src="https://dummyimage.com/500x500" alt="Post Image"
                            class="w-full rounded-lg border border-indigo-300 hover:shadow-lg transition cursor-pointer">
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
                                        <svg class="h-8 w-8 " fill="rgb(23, 107, 251)"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
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
        </div>
    </div>

</x-layout.client-layout>