<x-layout.auth-layout> 

  

  
      <x-auth-components.auth-header 
        title="Welcome Back!"
        subtitle="Log in to your account to continue and stay connected with all your updates."
      />
      <!--Start of Form-->
      <form>
        <div class="mt-5">
          <label class="block text-sm text-gray-700">Email or Student ID</label>
          <input
            class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg  placeholder:text-gray-500 focus:outline-none placeholder:font-light"
            type="text" />
        </div>

        <div class="relative">
          <div class="flex justify-between mt-1">
            <label class="block text-sm text-gray-700" for="loggingPassword">Password</label>
            <a class="flex justify-end mt-1 text-xs text-blue-600 hover:underline" href="{{ route('forgot-pwd') }}">Forgot
              Password?</a>
          </div>

          <input
            class="password-field block w-full px-4 pr-10 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg  placeholder:text-gray-500 focus:outline-none placeholder:font-light"
            type="password" />
          <span class="absolute top-8 right-4 ml-1 cursor-pointer toggle-password">
            <svg class="h-auto w-5 text-gray-500 toggle-password-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-gray-600">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
          </span>
        </div>

        <!--Start of Error Message-->
        <x-auth-components.auth-error-msge message="Incorrect email or password."/>
        <!--End of Error Message-->

        <x-auth-components.auth-main-btn text="Sign in"/>
      </form>
      


      <x-auth-components.auth-switch-link 
      message="Don't have an account?" 
      href="{{ route('alumni-verification') }}" 
      linkText="Sign up"
      />


</x-layout.auth-layout>
