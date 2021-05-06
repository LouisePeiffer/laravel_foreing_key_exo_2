@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column">
        <h2>Ajouter voiture</h2>
        <form action="{{route('voiture.store')}}" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="marque">Marque :</label>
                <input type="text" placeholder="Marque" id="marque" name="marque">
                <br>
                <label for="annee">Année :</label>
                <input type="text" placeholder="Année" id="annee" name="annee">
                <br>
                <label for="color">Couleur :</label>
                <select name="color_id" id="color_id">
                    @forelse ($colors as $color)
                        <option value="{{$color->id}}">{{$color->color}}</option>   
                    @empty
                    <option value="pas de couleur">Pas de couleur</option>
                    @endforelse
                </select>
                <br>
            </div>
            <button type="submit" class="btn btn-success">Ajouter une voiture</button>
    </div>

    </form>
@endsection