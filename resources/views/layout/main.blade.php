
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Sidici</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Filmler Yeni filmler falan filan izle" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
        <link href="{{asset('/dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('dist/css/contactstyle.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('dist/css/faqstyle.css')}}" type="text/css" media="all" />
        <link href="{{asset('dist/css/single.css')}}" rel='stylesheet' type='text/css' />
        <link href="{{asset('dist/css/medile.css')}}" rel='stylesheet' type='text/css' />
    <!-- banner-slider -->
        <link href="{{asset('dist/css/jquery.slidey.min.css')}}" rel="stylesheet">
    <!-- //banner-slider -->
    <!-- pop-up -->
        <link href="{{asset('dist/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up -->
    <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{asset('dist/css/font-awesome.min.css')}}" />
    <!-- //font-awesome icons -->
    <!-- js -->
        <script type="text/javascript" src="{{asset('dist/js/jquery-2.1.4.min.js')}}"></script>
    <!-- //js -->
    <!-- banner-bottom-plugin -->
        <link href="{{asset('dist/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="all">
        <script src="{{asset('dist/js/owl.carousel.js')}}"></script>
        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({

                    autoPlay: 3000, //Set AutoPlay to 3 seconds

                    items : 5,
                    itemsDesktop : [640,4],
                    itemsDesktopSmall : [414,3]

                });

            });
        </script>
    @yield('assets')
    <!-- //banner-bottom-plugin -->
        <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="{{asset('dist/js/move-top.js')}}"></script>
        <script type="text/javascript" src="{{asset('dist/js/easing.js')}}"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
    <!-- start-smoth-scrolling -->
    @yield('assets')
</head>

<body>
<div class="header">
    <div class="container">
        <div class="Ücretsiz Rresponsive Mobil Film Teması_logo">
            <a href="{{route('home')}}" >
                <img src={{ asset("images/logo.png") }} style="float:left"/>
            </a>
        </div>
        <div class="w3_search">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="search" id="search" placeholder="Film Ara..." required="">
                <input type="submit" value="Ara">
            </form>

        </div>
        <div class="clearfix"> </div>
    </div>

        <a href="{{ route('login') }}" style="float:right;">
            @if (Auth::guest())
                <b>Giriş</b>
            @else
                <b>Çıkış</b>
            @endif
            <img src={{ asset("images/login.png") }} style="padding-right:1cm"/></a>
        <a href="{{ route('cart.index') }}" style="float:right;"><b>( {{ Cart::count() }} )</b> <img src={{ asset("images/sepet.png") }} style="padding-right: 1cm"/></a><br><br>

</div>

<!-- bootstrap-pop-up -->

<!-- nav -->
    <div class="movies_nav">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('home')}}">Ana Sayfa</a></li>
                            <li class="dropdown">
                                <a href="{{route('genres')}}" class="dropdown-toggle" data-toggle="dropdown">Türler <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <li>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @if(!empty($categories))
                                                    @forelse($categories as $category)
                                                        <li><a href="{{route('genres',compact($category->id))}}">{{ $category->name }}</a></li>
                                                    @empty
                                                        <h3>hata</h3>
                                                    @endforelse

                                                 @endif
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('movies')}}">Tüm Ürünler</a></li>
                            <li><a href="{{route('contact')}}">İletişim</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    </div>

<!-- banner -->
    @yield('banner')

<!-- banner-bottom -->
    @yield('banner-bottom')

<div class="general_social_icons">
    <nav class="social">
        <ul>
            <li class="w3_twitter"><a href="https://twitter.com/kaaygisiz">Twitter <i class="fa fa-twitter"></i></a></li>
            <li class="w3_facebook"><a href="https://facebook.com/">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="w3_g_plus"><a href="https://google.com">Google+ <i class="fa fa-google-plus"></i></a></li>
        </ul>
    </nav>
</div>

<!-- general -->
@yield('content')
<!-- footer -->
    <div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h4 style="color: #EC600B">Müşteri Hizmetleri</h4>
                        <h3 style="color: #1dc1da;">444 7 444</h3>
                </div>
                <div class="w3ls_footer_grid_left1">
                    <h4 style="color: #EC600B">Mail Destek</h4>
                    <h3 style="color: #1dc1da;">destek@sidici.com</h3>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <p style="color:#1dc1da">Ödeme Seçenekleri</p><br>
                <p>       <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png" alt="Pay with PayPal, PayPal Credit or any major credit card" /></p>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">

        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="{{route('home')}}">Ana Sayfa</a>
                </li>
                <li>
                    <a href="{{route('faq')}}">S.S.S</a>
                </li>
                <li>
                    <a href="{{route('genres',compact($categories))}}">Türler</a>
                </li>
                <li>
                    <a href="{{route('iade')}}">İade Potitikamız</a>
                </li>
                <li>
                    <a href="{{route('garanti')}}">Garanti Politikamız</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">İletişim</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>

</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
@yield('assets2')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script><script type="text/javascript">
    Stripe.setPublishableKey('pk_test_PD7VYy41v0ZHKRY3Fb8vPGUE');
</script>
<script src="{{ asset('dist/js/hebele.js') }}"></script>
</body>
</html>