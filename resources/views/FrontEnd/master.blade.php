<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cafe Shelterville</title>
  <!-- Bootstrap cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>
  <!-- Style Css -->
  <link rel="stylesheet" href="{{ asset('/FrontEndSourceFile') }}/css/style.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

  <!-- Project Start -->

  <div id="video">
    <!-- video -->
    <video autoplay muted loop>
      <source src="{{ asset('/FrontEndSourceFile') }}/video.mp4" type="video/mp4">
    </video>
    <!--  video -->

    <!-- Navbar -->
    <nav id="navbar" class="navbar card navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{ url('http://localhost:8000') }}">
          <h3 class="text-white">Shelterville</h3>
        </a>

        <!-- Collapse Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-lable="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="basicExampleNav">
          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-white navhover" href="{{ url('http://localhost:8000') }}">Home</a>
            </li>

             @foreach($categories as $category)
            <li class="nav-item">
              <a class="nav-link text-white navhover" href="{{ route('category_food',['category_id'=>$category->category_id] ) }}">{{$category->category_name}}</a>
            </li>
            @endforeach



            <li class="nav-item">
              <a class="nav-link text-white navhover" href="#about">Tentang Kami</a>
            </li>


          </ul>
          <!--Left -->

          <!-- Right -->
          <ul class="navbar-nav">

            <li class="nav-item">
            <a href="https://www.instagram.com/" class="nav-link text-white navhover"
            target="blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>

          <li class="nav-item">
            <div class="cart cart box_1">
              <a class="nav-link text-white navhover" href="{{ route('cart_show') }}">
                <i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            </div>
            </li>

            @if(Session::get('customer_id'))
            <li class="nav-item">
                <a class="nav-link text-white navhover" href="{{ route('signup_up') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>
                {{Session::get('customer_name')}}</a>
              </li>
              @else
              <li class="nav-item">
                  <a class="nav-link text-white navhover" href="{{ route('signup_up') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>
                  Sign Up</a>
                </li>
                @endif


            @if(Session::get('customer_id'))
            <li class="nav-item">
                <a class="nav-link text-white navhover" href="#" onclick="document.getElementById('customerLogout').submit();"><i class="fa fa-sign-in" aria-hidden="true"></i>Logout</a>
                <form action="{{ route('log_out') }}" id="customerLogout" method="POST">
                  @csrf
                </form>
              </li>
              @else
              <li class="nav-item">
                  <a class="nav-link text-white navhover" href="{{ route('login_in') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login Customer</a>
                </li>
              @endif

              <li class="nav-item">

                  <a class="nav-link text-white navhover" href="{{ route('login') }}">Login Admin</a>
                </li>



          <!-- Right -->
        </div>
      </div>
    </nav>
   <!--  navbar -->

  <!--  Main Navigation -->
  <!--  Main Navigation -->

   @yield('content')

    @include('FrontEnd.include.footer')

   <!-- Project End -->


<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Scripts -->

 <!-- Custom Scripts -->
 <script src="custom.js"></script>

</body>
</html>
