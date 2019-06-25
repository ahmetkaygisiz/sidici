@extends('layout.main')

@section('content')
    <br>
    <center>
    <div class="row" style="width: 60%">
        <div class="small-6 small-centered columns">
            <h3>Adres Bilgileri</h3><br><br>

            {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('addressline', 'Adres İsmi') }}
                {{ Form::text('addressline', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('city', 'Adres') }}
                {{ Form::text('city', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('zip', 'Posta Kodu') }}
                {{ Form::text('zip', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('state', 'İlçe') }}
                {{ Form::text('state', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('country', 'İl') }}
                {{ Form::text('country', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone', 'Telefon') }}
                {{ Form::text('phone', null, array('class' => 'form-control')) }}
            </div>
                {{ Form::submit('Ödeme Ekranına Geç', array('class' => 'button success')) }}

            {!! Form::close() !!}
        </div>
    </div>
    </center>
    <br><br><br>
@endsection