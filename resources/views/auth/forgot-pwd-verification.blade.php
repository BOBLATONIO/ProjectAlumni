<x-layout.auth-layout>

    
            <x-auth-components.auth-header
                title="Verify your Account"
                subtitle="Please check your email and click the link to verify your email address."/>
            <!--Start of Form-->
            <form>
                {{-- <div class="flex gap-2 mt-5 justify-center items-center">
                    <input type="text" maxlength="1"
                        class="otp-input shadow-xs flex w-12 h-12 items-center justify-center rounded-lg border border-gray-500 bg-white text-gray-700 text-center text-3xl outline-none  " />
                    <input type="text" maxlength="1"
                        class="otp-input shadow-xs flex w-12 h-12 items-center justify-center rounded-lg border border-gray-500 bg-white  text-gray-700 text-center text-3xl  outline-none  " />
                    <input type="text" maxlength="1"
                        class="otp-input shadow-xs flex w-12 h-12 items-center justify-center rounded-lg border border-gray-500 bg-white  text-gray-700 text-center text-3xl  outline-none  " />
                    <input type="text" maxlength="1"
                        class="otp-input shadow-xs flex w-12 h-12 items-center justify-center rounded-lg border border-gray-500 bg-white  text-gray-700 text-center text-3xl  outline-none  " />
                    <input type="text" maxlength="1"
                        class="otp-input shadow-xs flex w-12 h-12 items-center justify-center rounded-lg border border-gray-500 bg-white  text-gray-700 text-center text-3xl  outline-none  " />
                    <input type="text" maxlength="1"
                        class="otp-input shadow-xs flex w-12 h-12 items-center justify-center rounded-lg border border-gray-500 bg-white  text-gray-700 text-center text-3xl  outline-none  " />
                </div> --}}

                <!-- Add counter in backend -->
                <div class="flex justify-start items-start mt-2">
                    <p class="text-xs text-gray-500 mr-1">
                        Didn't receive email?
                        <span id="resend-btn" class="text-xs text-blue-500 cursor-pointer hover:underline">Resend</span>
                        <span id="countdown" class="text-gray-400 hidden"></span>
                    </p>
                </div>

                {{-- <!--Start of Error Message-->
                <x-auth-components.auth-error-msge message="Invalid OTP. Please try again." />
                <!--End of Error Message--> --}}

                <x-auth-components.auth-main-btn text="Go Back" />
            </form>
            <!--End of Form-->
            <x-auth-components.auth-switch-link
                message=""
                href="{{ route('sign-in') }}"
                linkText="Continue with Password" />

 
</x-layout.auth-layout>