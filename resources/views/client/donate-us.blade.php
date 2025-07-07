<x-layout.client-layout>
    <div class="w-full flex flex-col items-center justify-center max-w-screen-xl px-6 pt-12 mx-auto">

        <!-- Page Header -->
        <x-client-components.client-page-header title="Support Our Alumni Community"
            body="Help us continue our mission of connecting and uplifting alumni. Your donation goes a long way in making events, programs, and support services possible." />

        <!-- Donation Information Section -->
        <section
            class="w-full max-w-4xl mx-auto bg-white dark:bg-[#252728] p-6 md:p-8 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-900 dark:text-gray-100">How Your Donation Helps
                </h2>
                <p class="text-sm md:text-base text-gray-700 dark:text-gray-300 mt-3 max-w-2xl mx-auto">
                    Your generous contribution will support alumni events, programs, and educational services. While we
                    don’t have an online donation form, we’ve made it easy to connect with the person handling donations
                    directly.
                </p>
            </div>

            <div class="bg-gray-50 dark:bg-[#2f3132] rounded-md shadow-inner p-6">
                <h3 class="text-xl md:text-2xl font-semibold text-blue-600 dark:text-blue-400 text-center">Donation
                    Coordinator</h3>
                <p class="text-sm md:text-base text-gray-800 dark:text-gray-300 text-center mt-4">
                    To make a donation, please reach out to our donation coordinator. They will assist you with the
                    donation process and answer any questions you may have.
                </p>

                <!-- Contact Info -->
                <div class="mt-6 space-y-4 text-center  text-gray-800 dark:text-gray-300">
                    <div>
                        <p class="font-medium text-gray-900 dark:text-gray-100">Name:</p>
                        <p class="text-sm md:text-base">John Doe</p>
                    </div>

                    <div>
                        <p class="font-medium text-gray-900 dark:text-gray-100">Email:</p>
                        <p class="text-sm md:text-base">john.doe@example.com</p>
                    </div>

                    <div>
                        <p class="font-medium text-gray-900 dark:text-gray-100">Phone:</p>
                        <p class="text-sm md:text-base">(123) 456-7890</p>
                    </div>

                    <div>
                        <p class="font-medium text-gray-900 dark:text-gray-100">Mailing Address (for check donations):
                        </p>
                        <p class="text-sm md:text-base">123 Donation St., Cityville, Country</p>
                    </div>
                </div>

                <!-- Appreciation Message -->
                <div class="mt-6 text-sm md:text-base text-gray-800 dark:text-gray-300 text-center">
                    We appreciate your support and kindness in helping to make our alumni network stronger and more
                    connected!
                </div>
            </div>
        </section>


        <!-- Footer Section -->
        <footer class="w-full max-w-4xl mx-auto mt-8 p-4 md:p-6  text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                © 2025 Our Alumni Association. All rights reserved.
            </p>
        </footer>

    </div>
</x-layout.client-layout>