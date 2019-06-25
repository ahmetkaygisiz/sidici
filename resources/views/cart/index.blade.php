@extends('layout.main')
@section('assets')
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://weloveiconfonts.com/api/?family=entypo">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/5175/utf-latest.min.css'>
    <link href="{{asset('/cartcss/css/cart.css')}}" rel="stylesheet" type="text/css" media="all" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
@endsection

@section('content')

    <h1 style="text-align: center">Sepetim</h1>
    <h2 class="sub-heading" style="text-align: center">Alışveriş Sepeti</h2>

    <section class="shopping-cart">
        <ol class="ui-list shopping-cart--list" id="shopping-cart--list">
            @foreach($cartItems as $cartItem)
                <li class="_grid shopping-cart--list-item">
                    <div class="_column product-info">
                        <h4 class="product-name">{{ $cartItem->name }}</h4>
                        <p class="product-desc"></p>
                        <div class="price product-single-price"> {{ $cartItem->price }} ₺</div>
                    </div>
                    <div class="_column product-modifiers" >
                        <div class="_grid">
                            {!!  Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
                                 <input type="text" class="_column product-qt" name="qty" size="2"  value="{{ $cartItem->qty }}" style="float: left ">
                                <input type="submit" class = "btn btn-sm btn-default" value="Ok" style="float: right ">
                            {!! Form::close() !!}
                        </div>
                        <form  action="{{ route('cart.destroy',$cartItem->rowId) }}" method="POST">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <input class="_btn entypo-trash product-remove" type="submit" value="Sil">
                        </form>
                        <div class="price product-total-price"> {{ $cartItem->qty * $cartItem->price }} ₺</div>
                    </div>
                </li>
            @endforeach
        </ol>
        <br>
        <footer class="_grid cart-totals">
            <div class="_column shipping" id="shippingCtr">
                <div class="cart-totals-key" style="color: #2ab27b">Ürün Vergisi</div>
                <div class="cart-totals-value">{{ Cart::tax() }}</div>
            </div>
            <div class="_column shipping" id="shippingCtr">
                <div class="cart-totals-key" style="color: #2ab27b">Ücret</div>
                <div class="cart-totals-value">{{ Cart::subtotal() }} ₺</div>
            </div>
            <div class="_column taxes" id="taxesCtr">
                <div class="cart-totals-key" style="color: #2ab27b">Kargo Ücreti</div>
                <div class="cart-totals-value">
                    @if(Cart::subtotal() > 50 )
                        <h5 style="text-align: left;">   Ücretsiz Kargo </h5>
                    @elseif( Cart::count() == 0)
                        0₺
                    @else
                        5₺
                    @endif

                </div>
            </div>
            <div class="_column total" id="totalCtr">
                <div class="cart-totals-key" style="color: #2ab27b">Toplam</div>
                <div class="cart-totals-value">
                    @if(Cart::subtotal() > 50 || Cart::count() == 0)
                        {{ Cart::subtotal() }}
                    @else
                        {{ Cart::subtotal() +5 }}
                    @endif
                        ₺
                </div>
            </div>
            <div class="_column checkout">
                <a href="{{ route('checkout.shipping') }}" class="_btn checkout-btn entypo-forward">Alışverişi Tamamla</a>
            </div>
        </footer>
    </section>

    @section('assets2')
        <script src='http://cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js'></script>
        <script type="text/javascript" src="{{asset('cartcss/js/index.js')}}"></script>
    @endsection

@endsection