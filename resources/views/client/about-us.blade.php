<x-layout.client-layout>

    <!-- About This Page Section -->
    <div class="flex flex-col mx-auto max-w-[1216px] px-5 lg:px-8 p-6 w-full text-justify">
        <h2 class="text-4xl font-semibold text-gray-900 mb-4">About This Page</h2>
        <p class="text-gray-600 leading-relaxed">
            Welcome to the official Alumni Portal of <strong>Dalubhasaang Polytekniko ng Lungsod ng Baliwag (DPLB)</strong>. 
            This website is created for the graduates of the institution.
        </p>
        <p class="text-gray-600 leading-relaxed mt-4">
            The main purpose of this portal is to keep alumni informed and engaged with the school. It provides updates, 
            announcements, and allows graduates to stay involved in school-related activities even after they leave.
        </p>
        <p class="text-gray-600 leading-relaxed mt-4">
            This portal also supports the <strong>Tracer Study</strong> of DPLB. The tracer study is a research tool used to track the 
            employment status, career path, and achievements of graduates. It helps the school assess the effectiveness 
            of its academic programs and make improvements based on real-life outcomes.
        </p>
        <p class="text-gray-600 leading-relaxed mt-4">
            This page serves as a connection between the institution and its alumni, and as a way to support continuous 
            learning and development.
        </p>
    </div>

    
    <div
        class="flex flex-col md:flex-row lg:gap-8 mx-auto justify-center max-w-[1216px] md:h-[555px] lg:h-[500px] px-5 lg:px-8 p-6 w-full">

        <!-- Mission Card -->
        <div
            class="p-6 flex flex-col w-full md:w-1/2 h-full sm:mx-auto sm:max-w-[560px] text-justify flex-grow">
            <img src="{{ asset('assets/images/mission-illus.png') }}" alt="Mission Image"
                class="mb-4 w-full h-32 object-cover rounded-lg">
            <h2 class="text-4xl font-semibold text-gray-900 text-start">Mission</h2>
            <p class="text-gray-600 mt-2 leading-relaxed">
                Our mission is to connect and empower alumni through meaningful relationships, professional
                development opportunities, and community engagement. We strive to support one another and foster
                a spirit of collaboration, ensuring our alumni contribute positively to society while enriching
                the lives of current students.
            </p>
        </div>

        <!-- Vision Card -->
        <div
            class="p-6 flex flex-col w-full md:w-1/2 h-full sm:mx-auto sm:max-w-[560px] text-justify flex-grow">
            <img src="{{ asset('assets/images/vision-illus.png') }}" alt="Vision Image"
                class="mb-4 w-full h-32 object-cover rounded-lg">
            <h2 class="text-4xl font-semibold text-gray-900 text-start">Vision</h2>
            <p class="text-gray-600 mt-2 leading-relaxed">
                To establish a dynamic and inclusive alumni network that fosters lifelong connections and
                collaboration, empowering members to share expertise and resources. We aim to drive community
                impact through volunteerism and mentorship while creating opportunities for professional
                development and personal growth, ensuring that our alumni are leaders who inspire and support
                the next generation.
            </p>
        </div>
    </div>

</x-layout.client-layout>
