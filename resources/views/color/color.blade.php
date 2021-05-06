@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column">
        <a href="{{route('color.create')}}" class="btn btn-warning">Ajouter une couleur</a>
        <h1>All colors</h1>
        <div>
            @foreach ($colors as $color)
                <p>{{ $color->color }}</p>
            @endforeach
        </div>
    </div>
@endsection