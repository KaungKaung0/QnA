
<nav class="navbar navbar-expand-lg default-primary-color">
 <!--  <a class="margin-fix navbar-brand text-primary-color" href="#"><img src="{{asset("img/Logo-Official.png")}}" width="120px" alt=""></a> -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="btn default-primary-color text-primary-color"><i class="fa fa-bars"></i></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-right">
    <li class="nav-item">
      <!-- <a class="nav-link text-primary-color yeon-sung nav-size" href="{{ route('main') }}"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a> -->
      <a class="home_color" href="{{ route('main') }}">
        <div class="home_container">
          <i class="fa fa-home"></i>
        </div>
      </a>
    </li>
    <li class="nav-item">
      <!-- <a class="nav-link text-primary-color yeon-sung nav-size" href="{{ route('profile') }}"><i class="fa fa-user"></i> My Profile</a> -->

      <a href="{{ route('profile') }}">
        <div id="profilecontainer">
          @if(is_null($profile_pic))
          <img src="http://www.gravatar.com/avatar/ade014a130559a4e4691e1267cc3433c.jpg?s=80&amp;d=mm&amp;r=g" alt="" width="30px" height="30px">
          @else
          <img src="{{asset("img/$profile_pic")}}" alt="" width="30px" height="30px">
          @endif
        </div>
      </a>


    </li>
      <!-- <li class="nav-item">
        <a class="nav-link text-primary-color yeon-sung nav-size" href="{{ route('aboutus') }}"><i class="fa fa-code"></i> About Developer</a>
      </li> -->
      
      
    </ul>
    
    <!-- <form id="logout-form" class="form-inline my-2 my-lg-0 typo" action="{{ route('logout') }}" method="POST">
      {{ csrf_field() }}
      <button type="submit" class="btn default-primary-color text-primary-color yeon-sung nav-size my-2 my-sm-0"><i class="fa fa-sign-out"></i> Logout</button>
    </form> -->
  </div>
</nav>