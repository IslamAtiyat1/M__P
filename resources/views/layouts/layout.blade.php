<html>
  <head>
    <title> @yield('title')</title>
  </head>
  <body>
  	@include('layouts.inc.frontend.navbar')

  		@yield('content')


  	{{-- @include('layouts.footer') --}}

  	@stack('js')
  </body>
</html>
