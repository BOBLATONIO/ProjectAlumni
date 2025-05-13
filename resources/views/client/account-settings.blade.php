<x-layout.client-layout>
    <div class="w-full flex flex-col items-center mb-8 justify-center max-w-screen-xl px-6 py-12 mx-auto">

        <x-client-components.client-page-header 
        title="Account Settings"
        body="Manage your personal information, update your login credentials, and customize your account preferences. Keep your profile up to date for a better and more secure experience."
      />

        <div class="w-full lg:w-3/4 flex flex-col gap-3">
            <div class=" w-full  h-auto bg-white border text-sm p-6 md:rounded-lg ">
                <form class=" w-full">
                    <div class="flex items-start md:items-center flex-col md:flex-row justify-between">
                        <div class="flex items-center gap-4 relative md:static">
                            <img src="/assets/images/Profile.jpeg" alt="Profile Picture"
                                class="absolute md:static w-20 h-20 mt-9 md:m-0 rounded-full object-cover">

                            <div class="ml-24 mb-3 md:m-0">
                                <h3 class="text-lg font-medium text-gray-900">Profile Picture</h3>
                                <p class="text-gray-600">PNG, JPEG under 15MB</p>
                            </div>
                        </div>
                        <div class="flex gap-2 ml-24 md:m-0 items-center ">
                            <label for="profile-picture"
                                class="px-4 py-2 text-xs text-gray-900 border border-gray-300 rounded-md hover:bg-gray-100 cursor-pointer">
                                Upload new picture
                            </label>
                            <input type="file" id="profile-picture" class="hidden">
                            <button
                                class="px-4 py-2 text-xs text-white bg-gray-900 rounded-md hover:bg-gray-700">Delete</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="  w-full max-w-[1280px] bg-white border text-sm p-6 md:rounded-lg ">
                <h2 class="text-lg font-medium text-gray-800">Profile Information</h2>
                <p class="text-gray-600">Your account's profile information and email address.</p>

                <div class="mt-4 w-full">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">First Name</label>
                        <div
                            class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-400">
                            Juan</div>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-medium">Last Name</label>
                        <div
                            class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-400">
                            Dela Cruz</div>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <div
                            class="w-full px-4 py-2 mt-1 border shadow-sm rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-400">
                            202312439@btech.ph.education</div>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white border text-sm p-6  md:rounded-lg ">
                <h2 class="text-lg font-medium text-gray-800">Update Password</h2>
                <p class="text-gray-600">Ensure your account is using a long, random password to stay
                    secure.</p>

                <form class="mt-4 w-full">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium">Current Password</label>
                        <input type="password" id="name"
                            class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-400">
                        <!--<p class="text-red-600">The current password field is required.</p>-->
                        <p class="text-red-600">The password is incorrect.</p>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium">New Password</label>
                        <input type="password" id="name"
                            class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-400">
                        <!--<p class="text-red-600">The password field is required.</p>-->
                        <p class="text-red-600">The password field confirmation does not match.</p>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium">Confirm Password</label>
                        <input type="password" id="name"
                            class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:outline-none focus:ring-1 focus:ring-blue-400">
                    </div>
                    <button type="submit"
                        class="px-4 py-2 text-xs bg-gray-900 text-white rounded-md hover:bg-gray-700">Change
                        Password</button>
                </form>
            </div>

        </div>
    </div>
            
     
</x-layout.client-layout>