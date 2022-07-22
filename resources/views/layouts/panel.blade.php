<!doctype html>
<html lang="en">
@include('layouts.header')
  <body>
   @include('sidebars.sidebra_right')

@yield('main')

   @include('layouts.footer')   
  </body>
</html>