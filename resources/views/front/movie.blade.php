@extends('layout.main')


@section('content')
    <div class="single-page-agile-main">
        <div class="container">
            <!-- /w3l-medile-movies-grids -->
            <div class="agileits-single-top">
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Ev</a></li>
                    <li class="active">Film</li>
                </ol>
            </div>
            <div class="single-page-agile-info">
                <!-- /movie-browse-agile -->
                <div class="show-top-grids-w3lagile">
                    <div class="col-sm-8 single-left">
                        <div class="song">
                            <div class="song-info">
                                <iframe width="640" height="480" src="{{$film->link}}" frameborder="0" allowfullscreen></iframe></div>
                                <h2 style="color: #761c19;">{{ $film->name }}</h2><br>
                                <p>{{ $film->description }}</p>
                            </div>
                            <br><br>
                            <div class="video-grid-single-page-agileits">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 single-right">
                        <a href="{{ route('cart.addItem',$film->id) }}" >
                            <img src={{ asset("images/sepet-byk.png") }}  style="float:right"/>
                        </a><br>
                        <b>Stoktaki Adet</b>
                        @if($film->stok_adet > 0)
                            <p> Stokta {{ $film->stok_adet }} adet ürün bulunmaktadır.</p>
                            @else
                            <b>Ürün stoklarımızda şimdilik bulunmamaktadır.</b>
                        @endif
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>
            <!-- //w3l-latest-movies-grids -->
        </div>
    </div>


@endsection
