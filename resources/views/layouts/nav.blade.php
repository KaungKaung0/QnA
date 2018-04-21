<!-- nav class="navbar color-change">
    <div id="navone">
        <div id="leftnavone">
            <div class="col-md-9 col-xs-11 p-l-2 p-t-2">
                <a class="font-color" href="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-lg"></i></a>
            </div>
        </div>
        <div id="rightnavone">
            <a class="navbar-brand font-color init" href="#">

                <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                မေးကြည့် Mayy Kyi
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-xs-1 p-l-0 p-r-0 collapse in" id="sidebar">
                <div class="list-group panel">
                    <a class="list-group-item collapsed font-color" href="{{ route('main') }}"><i class="fa fa-home"></i> <span class="hidden-sm-down">Home</span> </a>
                    <a class="list-group-item collapsed font-color" href="{{ route('profile') }}"></i><span class="hidden-sm-down">My Profile</span></a>

                    <a class="list-group-item collapsed font-color"  href="{{ route('aboutus') }}"><i class="fa fa-code"></i> <span class="hidden-sm-down">Developer Portfolio</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn button-official">Logout</button>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</nav>
 -->

 <nav class="navbar navbar-expand-lg default-primary-color">
  <a class="margin-fix navbar-brand text-primary-color" href="#"><img src="{{asset("img/Logo-Official.png")}}" width="120px" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="btn default-primary-color text-primary-color"><i class="fa fa-bars"></i></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-right">
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{ route('main') }}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{ route('profile') }}"><i class="fa fa-user"></i> My Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{ route('aboutus') }}"><i class="fa fa-code"></i> About Developer</a>
      </li>
      
      
    </ul>
    
    <form id="logout-form" class="form-inline my-2 my-lg-0 typo" action="{{ route('logout') }}" method="POST">
      {{ csrf_field() }}
      <button type="submit" class="btn default-primary-color text-primary-color yeon-sung nav-size my-2 my-sm-0"><i class="fa fa-sign-out"></i> Logout</button>
    </form>
  </div>
</nav>