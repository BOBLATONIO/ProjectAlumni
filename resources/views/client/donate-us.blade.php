<x-layout.client-layout>
    <div class="w-full flex flex-col items-center justify-center max-w-screen-xl px-6 py-12 mx-auto">
        
        <!-- Page Header -->
        <x-client-components.client-page-header 
            title="Support Our Alumni Community"
            body="Help us continue our mission of connecting and uplifting alumni. Your donation goes a long way in making events, programs, and support services possible."
        />

        <!-- Donation Information Section -->
        <section class="bg-white rounded-3xl shadow-xl p-8 mt-12 w-full sm:w-3/4 lg:w-2/3">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-semibold text-gray-800">How Your Donation Helps</h2>
                <p class="text-gray-600 mt-4">Your generous contribution will support alumni events, programs, and educational services. While we don’t have an online donation form, we’ve made it easy to connect with the person handling donations directly.</p>
            </div>

            <div class="flex justify-center items-center">
                <div class="bg-gray-50 rounded-xl shadow-lg w-full p-8 text-center">
                    <h3 class="text-3xl font-semibold text-blue-600">Donation Coordinator</h3>
                    <p class="text-lg text-gray-700 mt-4">To make a donation, please reach out to our donation coordinator. They will assist you with the donation process and answer any questions you may have.</p>

                    <!-- Contact Information Section -->
                    <div class="mt-8">
                        <p class="font-bold text-lg text-gray-800">Name:</p>
                        <p class="text-xl text-gray-700">John Doe</p>
                    </div>

                    <div class="mt-4">
                        <p class="font-bold text-lg text-gray-800">Email:</p>
                        <p class="text-xl text-gray-700">john.doe@example.com</p>
                    </div>

                    <div class="mt-4">
                        <p class="font-bold text-lg text-gray-800">Phone:</p>
                        <p class="text-xl text-gray-700">(123) 456-7890</p>
                    </div>

                    <div class="mt-4">
                        <p class="font-bold text-lg text-gray-800">Mailing Address (for check donations):</p>
                        <p class="text-xl text-gray-700">123 Donation St., Cityville, Country</p>
                    </div>

                    <!-- Call to Action -->
                    <div class="mt-8">
                        <p class="text-lg text-gray-700">We appreciate your support and kindness in helping to make our alumni network stronger and more connected!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="text-center py-8 mt-12 bg-gray-100 w-full">
            <p class="text-gray-600">© 2025 Our Alumni Association. All rights reserved.</p>
        </footer>
    </div>
</x-layout.client-layout>
