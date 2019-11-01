<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Remake Barber - Blog Details</title>
	<link rel="icon" href="{{asset('assetsss/frontend/img/Fevicon.png')}}" type="image/png">

  <link rel="stylesheet" href="{{  asset('assetsss/frontend/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{  asset('assetsss/frontend/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{  asset('assetsss/frontend/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{  asset('assetsss/frontend/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{  asset('assetsss/frontend/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{  asset('assetsss/frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{  asset('assetsss/frontend/css/style.css')}}">
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-center">
              <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="/archive">Archive</a></li>
              <li class="nav-item"><a class="nav-link" href="/category">Category</a>
              <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right navbar-social">
              <li><a href="#"><i class="ti-facebook"></i></a></li>
              <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li><a href="#"><i class="ti-instagram"></i></a></li>
              <li><a href="#"><i class="ti-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Hero sm Banner start =================-->
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Blog details</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->




  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <div class="main_blog_details">
                <img class="img-fluid" src="{{  asset('/assets/img/gallery/'.$gallery->foto)}}" alt="">
                <h4>{{$gallery->judul}}</h4>
                <div class="user_details">
                  <div class="float-left">
                     @foreach ($gallery->tag as $key)
                <a href="/blog/{{$key->slug}}">#{{ $key->nama }}</a>
                                @endforeach
                    <a href="{{$gallery->kategori->slug}}">{{$gallery->kategori->nama}}</a>
                  </div>
                  <div class="float-right mt-sm-0 mt-3">
                    <div class="media">
                      <div class="d-flex">
                        <img width="42" height="42" src="img/blog/user-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <p>{!!($gallery->konten)!!}</p>
               </div>
              </div>

        <!-- Start Blog Post Siddebar -->
        <div class="col-lg-4 sidebar-widgets">
            <div class="widget-wrap">
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
              </div>
            </div>
          </div>
        <!-- End Blog Post Siddebar -->
      </div>
  </section>
  <!--================ End Blog Post Area =================-->

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
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tab/="-1" value="" type="text">
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
              <li><img src="img/instagram/i1.jpg" alt=""></li>
              <li><img src="img/instagram/i2.jpg" alt=""></li>
              <li><img src="img/instagram/i3.jpg" alt=""></li>
              <li><img src="img/instagram/i4.jpg" alt=""></li>
              <li><img src="img/instagram/i5.jpg" alt=""></li>
              <li><img src="img/instagram/i6.jpg" alt=""></li>
              <li><img src="img/instagram/i7.jpg" alt=""></li>
              <li><img src="img/instagram/i8.jpg" alt=""></li>
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

  <script src="{{  asset('assetsss/frontend/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{  asset('assetsss/frontend/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{  asset('assetsss/frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{  asset('assetsss/frontend/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{  asset('assetsss/frontend/js/mail-script.js')}}"></script>
  <script src="{{  asset('assetsss/frontend/js/main.js')}}"></script>
</body>
</html>
