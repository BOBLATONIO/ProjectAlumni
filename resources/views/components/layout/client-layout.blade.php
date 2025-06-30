<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#273461">
    <title>{{ $title ?? 'BTech Alumni' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/AlumniLogo.jpg') }}">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.config.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">
</head>


<body class="font-sans bg-gray-100 flex flex-col min-h-screen dark:bg-[#1C1C1D]">
    
    <x-client-components.client-navbar
      name="Bini tine Cruz" 
      email="202121442@btech.ph.education" 
      imageSrc="{{ asset('assets/images/Profile.jpeg') }}"
      />
    
    {{-- @if (!request()->is('help-center')) --}}
        <div class=" h-screen  scrollbarMain overflow-y-scroll ">
            <div  class="flex-grow items-center  justify-center mt-16">
                {{ $slot }}
            </div>

            @if (!request()->is('account/settings') && !request()->is('alumni-id') && !request()->is('donate-us') && !request()->is('help-center') && !request()->is('questionnaire') && !request()->is('home'))
                <x-client-components.client-footer/>
            @endif
        </div>
    {{-- @endif --}}
    

    {{-- @if (request()->is('help-center'))
        <div class="">
            {{ $slot }}
        </div>
    @endif --}}

    <script src="{{ asset('assets/js/navbar.js') }}"></script>
    <script src="{{ asset('assets/js/darkMode.js') }}"></script>
    @stack('scripts')
    @if (!request()->is('announcement'))
        {{-- <script src="{{ asset('assets/js/navbar-animation.js') }}"></script> --}}
    @endif
</body>

</html>