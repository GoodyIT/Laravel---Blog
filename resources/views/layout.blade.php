<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        {!! MaterializeCSS::include_full() !!}
        <script src="{{ URL::asset('init.js') }}"></script>
    </head>

    <body>
      <div class="container">
          <div class="row">
              <div class="col s12 m8 offset-m2" style="margin-top:10px;">

          @yield('content')
              </div>
          </div>
      </div>

    </body>
</html>
