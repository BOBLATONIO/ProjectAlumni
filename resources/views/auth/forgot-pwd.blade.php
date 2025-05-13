<x-layout.auth-layout>

    
            <x-auth-components.auth-header
                title="Forgot Password"
                subtitle="Enter your email, and we’ll send you a code to reset your password." />
            <!--Start of Form-->
            <form>
                <div class="mt-5">
                    <label class="block text-sm text-gray-700">Email</label>
                    <input
                        class="block w-full px-4 py-2 text-gray-800 bg-white border border-gray-400 rounded-lg  focus:outline-none  placeholder:text-gray-400 placeholder:font-light"
                        type="text"  />
                </div>

                <!--Start of Error Message-->
                <x-auth-components.auth-error-msge message="Email doesn't exist." />
                <!--End of Error Message-->

                <x-auth-components.auth-main-btn text="Continue" />
            </form>
            <!--End of Form-->
            <x-auth-components.auth-switch-link
                message=""
                href="{{ route('sign-in') }}"
                linkText="Continue with Password" />

   
</x-layout.auth-layout>