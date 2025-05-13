<x-layout.auth-layout> 
        <x-auth-components.auth-header 
          title="Confirm your Identity"
          subtitle="Please confirm your alumni status to proceed with the sign-up process."
        />
        <!--Start of Form-->
        <form>
          <div class="flex w-full justify-between gap-1 mt-4">
            <div class="w-1/2">
                <label class="block text-sm text-gray-700">First Name</label>
                <input
                    class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg focus:outline-none"
                    type="text" placeholder="">
            </div>
            <div class="w-1/2">
                <label class="block text-sm text-gray-700">Last Name</label>
                <input
                    class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg focus:outline-none"
                    type="text" placeholder="">
            </div>
        </div>
          <div class="mt-1">
            <label class="block text-sm text-gray-700">Program/Course</label>
            <div class="relative">
              <select class="block w-full px-4 text-md py-2 pr-10 text-gray-700 bg-white border border-gray-400 rounded-lg focus:outline-none appearance-none">
                <option class="text-gray-500" value="" selected disabled> Select your course</option>
                <option value="1">BSIT</option>
                <option value="2">BSMJ</option>
                <option value="3">BSJD</option>
                <option value="4">JSSS</option>
              </select>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
          </div>
          <div class="flex justify-between gap-1 mt-1">
            <div class="">
                <label class="block text-sm text-gray-700">Student ID</label>
                {{-- acccept only number also add on controller --}}
                <input
                  id="student-id-input"
                  class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-400 rounded-lg g-opacity-40 focus:outline-none placeholder:text-gray-500 placeholder:font-light"
                  type="text" />
            </div>
            <div class="w-32">
                <label class="block text-sm text-gray-700">Year Graduated</label>
                {{-- acccept only number also add on controller --}}
                <input
                  id="year-input"
                  class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-400 rounded-lg focus:outline-none placeholder:text-gray-500 placeholder:font-light"
                  type="text"/>
            </div>              
          </div>
          
          
          <x-auth-components.auth-error-msge message="No matching alumni found. Please try again."/>
          <div class="flex justify-start text-xs ">
             <span class="mr-1">Forgot your student ID? </span><a href="https://m.me/61564802334660" target="_blank" class="text-blue-500 hover:underline"> Contact the Alumni Office. </a>
          </div>
  
          <x-auth-components.auth-main-btn text="Find My Profile"/>
        </form>
        
        <x-auth-components.auth-switch-link 
        message="Already have an account?" 
        href="{{ route('sign-in') }}" 
        linkText="Sign in"
        />
       
  
  </x-layout.auth-layout>
  