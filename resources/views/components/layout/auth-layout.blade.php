<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#273461">
  <title>{{ $title ?? 'BTech Alumni' }}</title>
  <link rel="icon" type="image/png" href="{{ asset('assets/images/AlumniLogo.jpg') }}">
  <script src="{{ asset('assets/js/tailwind.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="font-sans select-none">
  
  <div class="flex w-full max-w-sm mx-auto overflow-hidden bg-red-white lg:max-w-screen-2xl lg:h-full">
    <div class="w-full m-7 mb-0 lg:w-80 lg:mx-auto lg:my-auto xl:w-90 2xl:w-110">
      <x-auth-components.auth-logo/>
      {{ $slot }}
      <x-auth-components.auth-footer/>
    </div>
    <x-auth-components.auth-rightside/>
  </div>

  <script src="{{ asset('assets/js/authentication.js') }}"></script>
</body>

</html>