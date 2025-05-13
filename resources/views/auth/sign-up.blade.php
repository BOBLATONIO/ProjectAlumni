<x-layout.auth-layout> 
    
        <x-auth-components.auth-header 
      title="Create Your Account!"
      subtitle="Your alumni status is verified.<br>Fill out the form to create your account."
        />
        <!--Start of Form-->
        <form>
            <div class="flex w-full justify-between gap-1 mt-4">
                <div class="w-1/2">
                    <label class="block text-sm text-gray-700">First Name</label>
                    <div
                        class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg"
                        type="text">Juan</div>
                        
                </div>
                <div class="w-1/2">
                    <label class="block text-sm text-gray-700">Last Name</label>
                    <div
                        class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg"
                        type="text">Dela Cruz</div>
                </div>
            </div>
            <label class="block text-sm text-gray-700 mt-1">Email</label>
            <input
                class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg focus:outline-none"
                type="text" />

            <div class="relative">
                <label class="block text-sm text-gray-700 mt-1">Password</label>
                <input
                    class="block w-full px-4 py-2 pr-10 text-gray-700 bg-white border border-gray-400 rounded-lg focus:outline-none password-field"
                    type="password" /> {{-- Add min and max in validation --}}
                <span class="absolute top-8 right-4 ml-1 cursor-pointer toggle-password">
                    <svg class="h-auto w-5 text-gray-500 toggle-password-icon" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        class="size-6 text-gray-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </span>
            </div>
        
          <x-auth-components.auth-error-msge message="Fill in all fields!"/>
          <x-auth-components.auth-main-btn text="Sign up"/>
        </form>
        
        <x-auth-components.auth-switch-link 
        message="Already have an account?" 
        href="{{ route('sign-in') }}" 
        linkText="Sign in"
        />
  
        
  </x-layout.auth-layout>
  