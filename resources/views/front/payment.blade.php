@extends('layout.main')

@section('content')
    <br>
    <br>
    <center>

        <div class="row">
            <div class="small-6 small-centered columns">
                <form action="{{route('payment.store')}}" method="POST" id="payment-form">
                    {{csrf_field()}}
                    <span class="payment-errors"></span>

                    <div class="form-row">
                        <label>
                            <span>Kart Numarası</span>
                            <input type="text" size="20" data-stripe="number">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Son Kullanma Tarihi (MM/YY)</span>
                            <input type="text" size="2" data-stripe="exp_month">
                            <span> / </span>
                            <input type="text" size="2" data-stripe="exp_year">
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>CVC</span>
                            <input type="text" size="4" data-stripe="cvc">
                        </label>
                    </div>


                    <input type="submit" class="submit button success" value="Ödemeyi Gerçekleştir.">
                </form>
            </div>
        </div>
    </center>
    <br>
    <br>
    <br>
@endsection