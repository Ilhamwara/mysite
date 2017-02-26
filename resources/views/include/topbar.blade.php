<style type="text/css">
  .logo-nav{
    font-family: 'Cocogoose';
    font-size: 30px!important;
    background: -webkit-linear-gradient(#2ecc71,#3498db);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .navbar-default .navbar-toggle{border:none;}
</style>
<nav class="navbar navbar-default custom-navbar navbar-fixed-top">
  <div class="container-fluid" style="max-width:1000px; ">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
          <!-- <img class="logo-nav img-responsive" src="{{asset('img/ITCG_logo.svg')}}" width="80" style="margin-top: 10px;"> -->
          <!-- <a href="" class="logo-nav"><b>ITCG</b></a> -->
      
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        @if(url('/'))
        <!-- <li><a href="#about">About</a></li> -->
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#template">Template</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#contact">Contact</a></li>
        @else
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




