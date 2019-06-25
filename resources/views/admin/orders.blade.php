@extends('admin.layout.admin')
@section('content')

    <h3>Orders</h3>
    <hr>

    <ul style="list-style: none;">
        @foreach($orders as $order)
            <li>
                <h3><br> Sipariş {{$order->total}} TL</h3>
                <h4 style="color: #761c19">{{$order->user->name}} Tarafından Sipariş Edildi.<br></h4>
                <br><h6>Kullanıcı Mail Adresi &nbsp; <p style="color: #761c19">{{$order->user->email}}</p></h6>

                <form action="#" method="POST">
                    <input type="checkbox" value="1" name="deliver">
                    <input type="text" name="kargoTakip" placeholder="Kargo Takip No : ">
                </form>

                <div class="clearfix"></div>
                <hr>
                <h5>Items</h5>
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>qty</th>
                        <th>price</th>
                    </tr>

                </table>
            </li>

        @endforeach

    </ul>
@endsection

