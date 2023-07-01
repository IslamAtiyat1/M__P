<!doctype html>
<html lang="en">
  <head>
  	<title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/navbar.css">
<style>

    /* pink */
</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">



            <div class="main-navbar shadow-sm sticky-top">
                <div class="top-navbar">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                                <h5 class="brand-name">Drip4Stickers</h5>
                            </div>
                            <div class="col-md-5 my-auto">
                                {{-- <form role="search">
                                    <div class="input-group">
                                        <input type="search" placeholder="Search your product" class="form-control" />
                                        <button class="btn bg-white" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form> --}}
                            </div>

                            <div class="col-md-5 my-auto">
                                <ul class="nav justify-content-end">

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-shopping-cart"></i> Cart (0)
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">
                                            <i class="fa fa-heart"></i> Wishlist (0)
                                        </a>
                                    </li>
                                    @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-user"></i>      {{ Auth::user()->name }}
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-list"></i> My Orders</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-heart"></i> My Wishlist</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out"></i>  {{ __('Logout') }}
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                             @csrf
                                         </form>
                                        </li>
                                        </ul>
                                    </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
		<div class="container-fluied">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="index.html"></a>
		    	<div class="social-media order-lg-last">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>

                    </p>
	        </div>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto mr-md-3">
		        	<li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
		        	<li class="nav-item"><a href="{{url('/collections')}}" class="nav-link">All Categories</a></li>
		        	<li class="nav-item"><a href="#" class="nav-link">Work</a></li>
		        	<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
		          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>

		        </ul>
		      </div>
		    </div>
            <nav class="navbar">
                <div class="container-fluid">
                  <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline" style="background-color: rgb(255, 192, 203);" type="submit">Search</button>
                </form>
                </div>
              </nav>
		  </nav>
    <!-- END nav -->
  </div>

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>

