<!DOCTYPE html>
<html>
    <head>
        <title>Syrian Survey </title>
        {!! MaterializeCSS::include_css() !!}
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body style= "background-color : white ;">
      <div class="container">
          <div class="row center-align" style="padding-top:10px;">
              <div class="center-align">
                <img src="..\..\aa.png" alt="nopic" style= "width:300px ;  overflow : hidden ; padding">
                </div>
                <a class="btn waves-effect waves-light lighten-1 white-text" style= "background-color:#45c4a1" href="/"> Home </a>
                  @if(Auth::check())
                    <a class="btn-flat waves-effect waves-light darken-1 white black-text" href="/logout"> Logout </a>
                    <a class="btn-flat disabled" href="#" style="text-transform:none;">{{ Auth::user()->email }}</a>
                  @else
                    <a class="btn-flat waves-effect waves-light darken-1 white black-text" href="/login"> Login </a>
                    <a class="btn-flat waves-effect waves-light darken-1 white black-text" href="/register"> Register </a>
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col s12 m10 offset-m1 l8 offset-l2" style="margin-top:10px;">
                @yield('content')
              </div>
          </div>
      </div>
    </body>
    <script src="{{ URL::asset('jquery.min.js') }}"></script>
    {!! MaterializeCSS::include_js() !!}
    <script src="{{ URL::asset('init.js') }}"></script>

</html>
