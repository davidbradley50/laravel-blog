<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.head')
  </head>

  <body>

    @include('partials.nav')

    <div class="container">

        @include('partials.messages')

        @yield('content')

        @include('partials.footer')

    </div>

    @include('partials.javascript')

    @yield('scripts')

  </body>

</html>