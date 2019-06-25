@extends('admin.layout.admin')

@section('content')

    <div class ="navbar">
        <a class="navbar-brand" href="#" >Kategoriler</a>
        <ul class="nav navbar-nav">
            @if(!empty($categories))
                @forelse($categories as $category)
                    <li>
                        <a href="{{ route('category.show',$category->id)}}">{{ $category->name}}</a>
                    </li>
                @empty
                    <li>Kategori Yok</li>
                @endforelse
            @endif

        </ul>
        <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Kategori Ekle</a>
        <div class="modal fade" id="category">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Kategori Ekle</h4>
                    </div>
                    {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
                    <div class="modal-body">
                        <div class="form-group">
                            {{ Form::label('name', 'Title') }}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    {!! Form::close() !!}
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>

    @if(!empty($films))
    <section>
        <h3> Ürünler</h3>
        <table class="table table-hover">
            <thead>
            <tr>Ürünler</tr>
            </thead>
        </table>
            <tbody>
            @forelse($films as $film)
               <table align="center" border="1" width="100%">
                   <tr>
                       <td> {{ $film->name }}</td>
                   </tr>
                   <br>
               </table>
            @empty
                <tr><td> Ürün Yok</td></tr>
            @endforelse
        </tbody>
    </section>
        @else
            <section>
                <h3> Films Boş</h3>
            </section>
    @endif
@endsection