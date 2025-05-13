<x-layout.auth-layout> 

    <x-auth-components.auth-header
    title="Create new password"
    subtitle="Please enter your new password to proceed." />

<form>
    <div class="relative">
        <label class="block text-sm text-gray-700 mt-5">New password</label>
        <input id="new-password" class=" block w-full px-4 py-2 pr-10 text-gray-800 bg-white border border-gray-400 rounded-lg
            focus:border-blue-400 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300
            password-field" type="password" placeholder="At least 8 character" />
        <span data-target="new-password" class="absolute top-8 right-4 ml-1 cursor-pointer toggle-password">
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

    <div class="relative">
        <label class="block text-sm text-gray-700 mt-1">Re-enter password</label>
        <input id="re-enter-password"
            class="block w-full px-4 py-2 pr-10 text-gray-800 bg-white border border-gray-400 rounded-lg focus:border-blue-400 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300 password-field"
            type="password" placeholder="Confirm password" />
        <span data-target="re-enter-password"
            class="absolute top-8 right-4 ml-1 cursor-pointer toggle-password">
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

    <!--Start of Error Message-->
    <x-auth-components.auth-error-msge message="Passwords do not match. Please try again." />
    <!--End of Error Message-->

    <x-auth-components.auth-main-btn text="Continue" />
</form>
<!--End of Form-->
<x-auth-components.auth-switch-link
    message="Back to"
    href="{{ route('sign-in') }}"
    linkText="Sign in" />

</x-layout.auth-layout>