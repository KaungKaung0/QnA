
<nav class="navbar fixed-top navbar-expand-lg default-primary-color">
 <!--  <a class="margin-fix navbar-brand text-primary-color" href="#"><img src="{{asset("img/Logo-Official.png")}}" width="120px" alt=""></a> -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="btn default-primary-color text-primary-color"><i class="fa fa-bars"></i></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <h1>Mayy Kyi </h1>
  <ul class="navbar-nav mr-right">

    <form action="{{route('search')}}" method="get">
      {{csrf_field()}}
      <input id = "search_bar" type="text" name="search" placeholder="Search..">
      
    </form>

    <li class="nav-item">
      <a class="home_color" href="{{ route('main') }}">
        <div class="home_container">
          <i class="fa fa-home"><p class="res-home">Home</p></i>
        </div>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('profile') }}">
        <div class="supercontainer">
          <div id="profilecontainer">

            @if(is_null($pp))
            <img src="http://www.gravatar.com/avatar/ade014a130559a4e4691e1267cc3433c.jpg?s=80&amp;d=mm&amp;r=g" alt="" width="28px" height="28px">
            @else
            <img src="{{asset("img/$pp")}}" alt="" width="28px" height="28px">

            @endif
            <p class="res-profile"> My Profile</p>
          </div>
        </div>
      </a>
    </li>
    <li class="nav-item">
      <a class="Ask_Content" href="{{route('t_view' , ['try'=>"question"])}}">
        <div class="Ask_Container">
          Ask Here
        </div>
      </a>
    </li>
  </ul>

    <!-- <form id="logout-form" class="form-inline my-2 my-lg-0 typo" action="{{ route('logout') }}" method="POST">
      {{ csrf_field() }}
      <button type="submit" class="btn default-primary-color text-primary-color yeon-sung nav-size my-2 my-sm-0"><i class="fa fa-sign-out"></i> Logout</button>
    </form> -->
  </div>
</nav>