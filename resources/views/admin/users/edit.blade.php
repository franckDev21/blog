@extends('base')
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container">
    <h1 class="mt-4">Editer le profil de {{ $user->nom }}</h1>
    <hr>
    <form action="/user/{{$user->id}}" method="POST">
        @method('PATCH')
        <!-- inclusion de mon fichier form.blade.php -->
        @include('includes.form')
        <div class="form-group">
            <input type="submit" value="Sauvegarder les modifications" class="btn btn-success">
        </div>
    </form>
</div>

@endsection