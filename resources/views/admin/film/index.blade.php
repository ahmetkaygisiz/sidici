@extends('admin.layout.admin')

@section('content')
    <h3>Filmler</h3><br><br>

    <ul>
        @forelse($films as $film)
            <li>
                <h4 style="color: #761c19">Filmin Adı:
                    <div class="text" style="color:#0fa6bc;">{{ $film->name}}</div></h4>
                <h4 style="color: #761c19"> Kategori : {{ count($film->category)?$film->category->name : "N/A" }}</h4>
                <form action="{{route('film.destroy',$film->id)}}"  method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                </form>
            </li>
            @empty
                <h3>Film Yok.</h3>
        @endforelse



    </ul>

@endsection