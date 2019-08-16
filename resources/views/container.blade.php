<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>University of Southern Virginia Beach :: Dorm Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/usvb.css') }}" rel="stylesheet">

        @yield('scripts')
    </head>
    <body>

      <div id="header">
         <a class="nav-link" href="{{ url('/') }}">USVB</a>
         <a class="nav-link" href="{{ route('dorm-details', 1) }}">Tecumseh Hall</a>
         <a class="nav-link" href="{{ route('dorm-details', 2) }}">Sandbridge Towers</a>
      </div>

      <div class="flex-center position-ref full-height">
          <div id="content">
              @yield('content')
          </div>
        </div>
    </body>
</html>
