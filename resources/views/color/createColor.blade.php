@extends('layouts.index')

@section('content')
    <div class="d-flex flex-column">
        <h2>Ajouter voiture</h2>
        <form action="{{route('color.store')}}" method="POST">
            @csrf
            <div class="d-flex flex-column">
                <label for="color">Couleur :</label>
                <input type="text" placeholder="Couleur" id="color" name="color">
                <br>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
    </div>

    </form>
@endsection