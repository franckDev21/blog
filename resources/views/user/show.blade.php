@extends('base')
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container">
    <h1>{{ $user->nom }}</h1>
    <a href="/user/{{ $user->id }}/edit" class="btn btn-primary">editer l'utisateur</a>
    @include('includes.destroy')
    <hr>
    <p>Prenm : {{ $user->prenom }}</p>
    <p>Email : {{ $user->email  }}</p>
</div>

@endsection