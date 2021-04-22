@extends('base')
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container">
    <h1 class="my-4">Admin</h1>
    <div class="bg bg-light py-4 text-right pr-4 mb-3"><a href="{{ route('admin_create_') }}" class="btn btn-primary">Ajouter un employer</a></div>
    <h4>liste des employer</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="">Nom</th>
                <th scope="">Prenom</th>
                <th scope="">Email</th>
                <th scope="">société</th>
                <th scope="">Tel</th>
                <th scope="">Action</th>
            </tr>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td> <a href="/user/{{$user->id}}"> {{ $user->nom }}</a> </td>
                <td> {{ $user->prenom }} </td>
                <td class="text-muted"> <em>{{ $user->email }} </em></td>
                <td> {{ $user->socite }} </td>
                <td> {{ $user->tel ?? 'aucun numero' }} </td>
                <td>
                    <a href="#" class="btn btn-sm btn-info">modifier</a>
                    <a href="#" class="btn btn-sm btn-danger">modifier</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </thead>
    </table>

</div>
@endsection