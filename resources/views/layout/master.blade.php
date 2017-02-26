<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mysite</title>
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
  <link href="{{asset('css/MontserratFont.css')}}" rel="stylesheet">
  <link href="{{asset('css/cocogoose.css')}}" rel="stylesheet">
  @yield('css')
</head>
<body>


  @yield('content')

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/wow.js')}}"></script>
  <script type="text/javascript">
    new WOW().init();
  </script>
  @yield('js')
</body>
</html>