@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column">
        <a href="{{route('voiture.create')}}"><button class="btn btn-primary">Ajouter voiture</button></a>
        <div> 
            @foreach ($voitures as $voiture)
                <div>
                    {{$voiture->marque}}
                    {{$voiture->color->color}}
                </div>
            @endforeach
        </div>
    </div>
@endsection