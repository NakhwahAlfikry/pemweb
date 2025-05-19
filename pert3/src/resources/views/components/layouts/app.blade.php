<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.partials.header')

<body>

<!-- navigation -->
@include('components.partials.navigation')
<!-- /navigation -->

{{ $slot }}

@include('components.partials.footer')


<!-- @yield('footer') -->


@livewireScripts
</body>
@include('components.partials.script')
</html>