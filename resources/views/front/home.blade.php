@extends('layout.main')


@section('banner')
    <div id="slidey" style="display:none;">
        <ul>
          <?php  $count = 0  ?>

              @foreach($films as $film)
                <li>
                    <img src={{ url('images',$film->image_banner) }} >
                    <p class='title'> {{ $film->name }}</p>
                    <p class='description'> {{ substr($film->description, 0, 450)  }}...</p></li>
                  <?php  $count++ ?>
                @if($film != null)
                        <h3> Yok </h3>
                  @endif
                  @if($count > 4)
                      <?php  break; ?>
                  @endif

              @endforeach
        </ul>
    </div>
    <script src="{{asset('dist/js/jquery.slidey.js')}}"></script>
    <script src="{{asset('dist/js/jquery.dotdotdot.min.js')}}"></script>
    <script type="text/javascript">
        $("#slidey").slidey({
            interval: 8000,
            listCount: 5,
            autoplay: false,
            showList: true
        });
        $(".slidey-list-description").dotdotdot();
    </script>
@endsection


<!--   Burası Banner Altındaki Kısın-->
@section('banner-bottom')


        <div class="general">
            <h4 class="latest-text w3_latest_text">Yeni Filmler</h4>
            <div class="container">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                        <?php  $count = 0  ?>

                        @foreach($films as $film)
                                <div class="item">
                                    <div class="col-md-2 w3l-movie-gride-agile">
                                        <a href="{{ route('movie',$film->id) }}" class="hvr-shutter-out-horizontal">
                                                <img src= {{ url('images',$film->image) }}  class="img-responsive" alt = " "/>
                                                <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                            </a>
                                            <div class="mid-1 agileits_Ücretsiz Rresponsive Mobil Film Teması_mid_1_home">
                                                <div class="w3l-movie-text">
                                                    <h6><a href="">{{ $film->name }}</a></h6>
                                                </div>
                                                <div class="mid-2 agile_mid_2_home">
                                                    <p> {{ $film->price}} ₺ </p>
                                                    <a href="{{ route('cart.addItem',$film->id) }}" >
                                                        <img src={{ asset("images/cart-image.png") }}  style="float:right"/>
                                                    </a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="ribben">
                                                <p>NEW</p>
                                            </div>
                                    </div>
                            </div>
                                <?php  $count++ ?>
                            @if($count > 5)
                                <?php  break; ?>
                            @endif

                        @endforeach


                    <div class="clearfix"> </div>
                </div>
            </div>

            <h4 class="latest-text w3_latest_text">İndirimdekiler</h4>
            <div class="container">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

                    <?php
                        $count = 0;
                        $deneme = \App\film::where('id', '>', '0')->orderBy('price', 'asc')->take(6)->get();
                    ?>

                    @foreach($deneme as $film)
                            <div class="item">
                                <div class="col-md-2 w3l-movie-gride-agile">
                                    <a href="{{ route('movie',$film->id) }}" class="hvr-shutter-out-horizontal">
                                        <img src= {{ url('images',$film->image) }}  class="img-responsive" alt = " "/>
                                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                                    </a>
                                    <div class="mid-1 agileits_Ücretsiz Rresponsive Mobil Film Teması_mid_1_home">
                                        <div class="w3l-movie-text">
                                            <h6><a href="">{{ $film->name }}</a></h6>
                                        </div>
                                        <div class="mid-2 agile_mid_2_home">
                                            <p> {{ $film->price}} ₺ </p>
                                            <a href="{{ route('cart.addItem',$film->id) }}" >
                                                <img src={{ asset("images/cart-image.png") }}  style="float:right"/>
                                            </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                </div>
                            </div>
                            <?php  $count++ ?>
                            @if($count > 5)
                                <?php  break; ?>
                            @endif


                        @endforeach
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
        </div>

@endsection

@section('content')


    <!-- pop-up-box -->
    <script src="{{asset('dist/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
    <!--//pop-up-box -->
    <div id="small-dialog" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>
    </div>
    <div id="small-dialog1" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/148284736"></iframe>
    </div>
    <div id="small-dialog2" class="mfp-hide">
        <iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
    </div>
    <script>
        $(document).ready(function() {
            $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!-- flexSlider -->
    <link rel="stylesheet" href="{{asset('dist/css/flexslider.css')}}" type="text/css" media="screen" property="" />
    <script defer src="{{asset('dist/js/jquery.flexslider.js')}}"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
@endsection