<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        {!! MaterializeCSS::include_css() !!}
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body>
      <div class="container">
          <div class="row" style="padding-top:10px;">
              <div class="center-align">
                <a class="dropdown-button btn blue lighten-1" href="/"> Home </a>
              </div>
          </div>
          <div class="row">
              <div class="col s12 m8 offset-m2" style="margin-top:10px;">

          @yield('content')
              </div>
          </div>
      </div>
    </body>
    <script src="{{ URL::asset('jquery.min.js') }}"></script>
    {!! MaterializeCSS::include_js() !!}
    <script src="{{ URL::asset('init.js') }}"></script>

</html>
