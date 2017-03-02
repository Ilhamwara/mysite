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
  <script type="text/javascript">
      $(document).ready(function(){       
       var scroll_start = 0;
       var startchange = $('.first-section');
       var offset = startchange.offset();
       if (startchange.length){
         $(document).scroll(function() { 
          scroll_start = $(this).scrollTop();
          if(scroll_start > offset.top) {
            $(".navbar-default").css('background-color', '#333');
          } else {
            $('.navbar-default').css('background-color', 'transparent');
          }
        });
       }
     });
 </script>
</body>
</html>