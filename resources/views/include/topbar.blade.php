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
      <ul class="nav navbar-nav">
        <li>
          <a href="#home" class="logo-bar navbar-brand" style="padding: 5px;">
            <img src="{{asset('img/ilham.png')}}" class="img-responsive img-circle" width="40"> 
          </a>
        </li>
        <li>
          <a href=""><b>iWar</b></a>
        </li>
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="pull-right collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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




