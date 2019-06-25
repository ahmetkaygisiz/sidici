@extends('admin.layout.admin')

@section('content')
    <h3>Film Ekle</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    {!! Form::open(['route' => 'film.store', 'method' => 'POST', 'files' => true]) !!}

        <div class="form-group">
            {{ Form::label('price', 'Fiyat') }}
            {{ Form::text('price', null, array('class' => 'form-control','required'=>'')) }}
        </div>

         <div class="form-group">
            {{ Form::label('name', 'Filmin Adı') }}
            {{ Form::text('name', null, array('class' => 'form-control','required'=>'')) }}
        </div>

        <div class="form-group">
            {{ Form::label('nameOrj', 'Orjinal Adı') }}
            {{ Form::text('nameOrj', null, array('class' => 'form-control','required'=>'')) }}
        </div>


        <div class="form-group">
            {{ Form::label('category_id', 'Kategori') }}
            {{ Form::select('category_id', $categories, null,['class' => 'form-control','placeholder' => 'Kategori Seçin'])}}
        </div>

        <div class="form-group">
            {{ Form::label('lang', 'Dili') }}
            {{ Form::text('lang', null, array('class' => 'form-control','required'=>'')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Açıklama') }}
            {{ Form::text('description', null, array('class' => 'form-control','required'=>'')) }}
        </div>

        <div class="form-group">
            {{ Form::label('time', 'Süre') }}
            {{ Form::text('time', null, array('class' => 'form-control','required'=>'')) }}
        </div>

        <div class="form-group">
            {{ Form::label('year', 'Yapılış Tarihi') }}
            {{ Form::text('year', null, array('class' => 'form-control','required'=>'')) }}
        </div>

        <div class="form-group">
            {{ Form::label('contry', 'Ülke') }}
            {{ Form::text('country', null, array('class' => 'form-control','required'=>'')) }}
        </div>

        <div class="form-group">
             {{ Form::label('image', 'Film Afişleri') }}
             {{ Form::file('image',array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
            {{ Form::label('image_banner', 'Film Banner Fotoğrafı') }}
            {{ Form::file('image_banner',array('class' => 'form-control')) }}
         </div>

         {{ Form::submit('Ekle', array('class' => 'btn btn-default')) }}

    {!! Form::close() !!}
        </div>
    </div>


@endsection