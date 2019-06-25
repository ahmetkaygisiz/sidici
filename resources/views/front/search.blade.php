@extends('layout.main')

@section('content')
    <br><br>
    <div class="container">
        <h4 class="latest-text w3_latest_text">Arama Sonucu</h4>
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <?php $count = 0 ; ?>
            @foreach($results as $film)
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
                    </div>
                </div>
                <?php  $count++ ?>
                @if($count > 4)
                    <br>
                @endif
             p
            @endforeach


            <div class="clearfix"> </div>
        </div>
    </div>
@endsection