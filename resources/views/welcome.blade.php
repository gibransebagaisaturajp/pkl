{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{session('status')}}
                        </div>
                    @endif
                    <center>
                    <h1>Selamat Datang</h1>
                    {{-- @gueat

                    @role('admin')
                    }}
                    @endguest
                    @endrole --}}
                     {{-- </center>
                </div>

        </div>
    </body>
</html> --}}



{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Backend</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assetss/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assetss/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{asset('assetss/images/bg-01.jpg')}}');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
                        @csrf

                <div class="form-group row">
				</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input id="email" class="input100  @error('email') is-invalid @enderror" type="email" name="email" placeholder="User name" value="{{ old('email') }}" required autocomplete="email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						<div class="col-md-6">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            	</div>
                        </div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						<div class="col-md-6">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
						</div>
					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							 {{ __('Login') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assetss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assetss/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assetss/js/main.js')}}"></script>

</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sensive Blog - Home</title>
	<link rel="icon" href="{{  asset('assetsss/frontend/img/Fevicon.png')}}" type="{{ asset('assetsss/frontend/img/image/png')}}">

  <link rel="stylesheet" href="{{ asset('assetsss/frontend/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assetsss/frontend/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assetsss/frontend/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('assetsss/frontend/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assetsss/frontend/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assetsss/frontend/vendors/owl-carousel/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{ asset('assetsss/frontend/css/style.css')}}">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index"><img src="{{  asset('assetsss/frontend/img/logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item active"><a class="nav-link" href="index">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="archive">Archive</a></li>
              <li class="nav-item"><a class="nav-link" href="category">Category</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="singleblog">Blog Details</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="https://id-id.facebook.com "><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-whatsapp"></i></a></li>
              {{-- <li><a href="#"><i class="ti-skype"></i></a></li> --}}
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <main class="site-main">
    <!--================Hero Banner start =================-->
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner">
          <div class="hero-banner__content">
            <h3>Tours & Travels</h3>
            <h1>Amazing Places on earth</h1>
            <h4>December 12, 2018</h4>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->

    <!--================ Blog slider start =================-->
    <section>
      <div class="container">
        <div class="owl-carousel owl-theme blog-slider">
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/blog-slider/blog-slide1.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Fashion</a>
              <h3><a href="#">New york fashion week's continued the evolution</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/blog-slider/blog-slide2.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Fashion</a>
              <h3><a href="#">New york fashion week's continued the evolution</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/blog-slider/blog-slide3.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Fashion</a>
              <h3><a href="#">New york fashion week's continued the evolution</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/blog-slider/blog-slide1.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Fashion</a>
              <h3><a href="#">New york fashion week's continued the evolution</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/blog-slider/blog-slide2.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Fashion</a>
              <h3><a href="#">New york fashion week's continued the evolution</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
          <div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/blog-slider/blog-slide3.png')}}" alt="">
            </div>
            <div class="blog__slide__content">
              <a class="blog__slide__label" href="#">Fashion</a>
              <h3><a href="#">New york fashion week's continued the evolution</a></h3>
              <p>2 days ago</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Blog slider end =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{  asset('assetsss/frontend/img/blog/blog1.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="singleblog">
                  <h3>Woman claims husband wants to name baby girl
                    after his ex-lover sparking.</h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{  asset('assetsss/frontend/img/blog/blog2.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="singleblog">
                  <h3>Woman claims husband wants to name baby girl
                    after his ex-lover sparking.</h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{  asset('assetsss/frontend/img/blog/blog3.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="singleblog">
                  <h3>Tourist deaths in Costa Rica jeopardize safe dest
                    ination reputation all time. </h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>

            <div class="single-recent-blog-post">
              <div class="thumb">
                <img class="img-fluid" src="{{  asset('assetsss/frontend/img/blog/blog4.png')}}" alt="">
                <ul class="thumb-info">
                  <li><a href="#"><i class="ti-user"></i>Admin</a></li>
                  <li><a href="#"><i class="ti-notepad"></i>January 12,2019</a></li>
                  <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
                </ul>
              </div>
              <div class="details mt-20">
                <a href="singleblog">
                  <h3>Tourist deaths in Costa Rica jeopardize safe dest
                    ination reputation all time.  </h3>
                </a>
                <p class="tag-list-inline">Tag: <a href="#">travel</a>, <a href="#">life style</a>, <a href="#">technology</a>, <a href="#">fashion</a></p>
                <p>Over yielding doesn't so moved green saw meat hath fish he him from given yielding lesser cattle were fruitful lights. Given let have, lesser their made him above gathered dominion sixth. Creeping deep said can't called second. Air created seed heaven sixth created living</p>
                <a class="button" href="#">Read More <i class="ti-arrow-right"></i></a>
              </div>
            </div>



            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Previous">
                                  <span aria-hidden="true">
                                      <i class="ti-angle-left"></i>
                                  </span>
                              </a>
                          </li>
                          <li class="page-item active"><a href="#" class="page-link">1</a></li>
                          <li class="page-item"><a href="#" class="page-link">2</a></li>
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Next">
                                  <span aria-hidden="true">
                                      <i class="ti-angle-right"></i>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </nav>
              </div>
            </div>
          </div>

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Newsletter</h4>
                  <div class="form-group mt-30">
                    <div class="col-autos">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Enter email'">
                    </div>
                  </div>
                  <button class="bbtns d-block mt-20 w-100">Subcribe</button>
                </div>


                <div class="single-sidebar-widget post-category-widget">
                  <h4 class="single-sidebar-widget__title">Catgory</h4>
                  <ul class="cat-list mt-20">
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Technology</p>
                        <p>(03)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Software</p>
                        <p>(09)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>(12)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>(02)</p>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>(10)</p>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="single-sidebar-widget popular-post-widget">
                  <h4 class="single-sidebar-widget__title">Popular Post</h4>
                  <div class="popular-post-list">
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/thumb/thumb1.png')}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="singleblog">
                          <h6>Accused of assaulting flight attendant miktake alaways</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/thumb/thumb2.png')}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="singleblog">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                    <div class="single-post-list">
                      <div class="thumb">
                        <img class="card-img rounded-0" src="{{  asset('assetsss/frontend/img/blog/thumb/thumb3.png')}}" alt="">
                        <ul class="thumb-info">
                          <li><a href="#">Adam Colinge</a></li>
                          <li><a href="#">Dec 15</a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="singleblog">
                          <h6>Tennessee outback steakhouse the
                            worker diagnosed</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                  <div class="single-sidebar-widget tag_cloud_widget">
                    <h4 class="single-sidebar-widget__title">Popular Post</h4>
                    <ul class="list">
                      <li>
                          <a href="#">project</a>
                      </li>
                      <li>
                          <a href="#">love</a>
                      </li>
                      <li>
                          <a href="#">technology</a>
                      </li>
                      <li>
                          <a href="#">travel</a>
                      </li>
                      <li>
                          <a href="#">software</a>
                      </li>
                      <li>
                          <a href="#">life style</a>
                      </li>
                      <li>
                          <a href="#">design</a>
                      </li>
                      <li>
                          <a href="#">illustration</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <!-- End Blog Post Siddebar -->
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
  </main>

  <!--================ Start Footer Area =================-->
  <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">

              <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">

                <div class="d-flex flex-row">

                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                    required="" type="email">


                  <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                  <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                  </div>

                  <!-- <div class="col-lg-4 col-md-4">
                        <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                      </div>  -->
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Instragram Feed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i1.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i2.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i3.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i4.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i5.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i6.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i7.jpg')}}" alt=""></li>
              <li><img src="{{  asset('assetsss/frontend/img/instagram/i8.jpg')}}" alt=""></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="#">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <script src= "{{   asset('assetsss/frontend/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src= "{{   asset('assetsss/frontend/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src= "{{   asset('assetsss/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src= "{{   asset('assetsss/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src= "{{   asset('assetsss/frontend/js/mail-script.js')}}"></script>
  <script src= "{{   asset('assetsss/frontend/js/main.js')}}"></script>
</body>
</html>