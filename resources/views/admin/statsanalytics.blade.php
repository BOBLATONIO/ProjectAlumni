<x-layout.admin-layout pageTitle="Statistics & Analytics">
    <x-slot:headerTab>
    </x-slot:headerTab>

    <div class=" mx-auto bg-white p-6 shadow-lg rounded-lg">
        <!-- First Pie Chart -->
    <div class="chart-container w-[300px] mx-auto bg-white p-6 shadow-lg rounded-lg mt-10">
        <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Job Sectors of Graduates</h2>
        <canvas class="pieChartCanvas w-full h-auto"></canvas>
        {{-- custom label --}}
        <div class="custom-labels text-green-900 text-sm font-bold hidden"></div>
        <div class="hidden pie-chart-data" data-title="Employment Sectors">
            <div data-label="Tecdsfdsfdsfdsh" class="p-2">123</div>
            <div data-label="Healthcare" class="p-2">456</div>
            <div data-label="Education" class="p-2">789</div>
            <div data-label="kfkdsnfsd" class="p-2">123</div>
        </div>
    </div>

    <!-- Second Pie Chart -->
    <div class="chart-container w-[300px] mx-auto bg-white p-6 shadow-lg rounded-lg mt-10">
        <h2 class="text-xl font-bold mb-4 text-gray-900 dark:text-white">Job Sectors of Graduates</h2>
        <canvas class="pieChartCanvas w-full h-auto"></canvas>
        <div class="custom-labels text-blue-900 text-sm font-bold hidden"></div>
        <div class="hidden pie-chart-data" data-title="Employment Sectors">
            <div data-label="Tech" class="p-2">123</div>
            <div data-label="Healthcare" class="p-2">456</div>
            <div data-label="Education" class="p-2">789</div>
        </div>
    </div>

        

       

        <div class=" mx-auto bg-white p-6 shadow-lg rounded-lg">
            <h2 class="text-xl font-bold mb-4">Graduate Course Relevance</h2>
            <p class="text-gray-600 mb-4">Approximately 80% of school graduates work in a field related to their course of study per year.</p>
            <canvas class="chartCanvas"></canvas>
    
            <div class="hidden chart-data" data-xlabel="Year" data-ylabel="Percentage">
                <div data-label="2019">10</div>
                <div data-label="2020">50</div>
                <div data-label="2021">100</div>
                <div data-label="2022">100</div>
                <div data-label="2023">30</div>
                <div data-label="2019">10</div>
                <div data-label="2020">50</div>
                <div data-label="2021">100</div>
                <div data-label="2022">100</div>
                <div data-label="2023">30</div>
                <div data-label="2019">10</div>
                <div data-label="2020">50</div>
                <div data-label="2021">100</div>
                <div data-label="2022">100</div>
                <div data-label="2023">30</div>
            </div>
        </div>
        <div class="max-w-xl mx-auto bg-white p-6 shadow-lg rounded-lg">
            <h2 class="text-xl font-bold mb-4">harvey chart</h2>
            <p class="text-gray-600 mb-4">Approximately 80% of school graduates work in a field related to their course of study per year.</p>
            <canvas class="chartCanvas"></canvas>
    
            <div class="hidden chart-data" data-xlabel="Year" data-ylabel="Percentage">
                <div data-label="2019">10</div>
                <div data-label="2020">50</div>
                <div data-label="2021">100</div>
                <div data-label="2022">100</div>
                <div data-label="2023">30</div>
                <div data-label="2019">10</div>
                <div data-label="2020">50</div>
                <div data-label="2021">100</div>
                <div data-label="2022">100</div>
                <div data-label="2023">30</div>
            </div>
        </div>
    </div>

    
</x-layout.admin-layout>