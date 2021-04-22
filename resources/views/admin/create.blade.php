@extends('base')
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container">
    <h1 class="mt-4">Nouveau l'employer</h1>
    <hr>
    <form action="{{ route('admin_') }}" method="POST">
        @csrf
        <!-- inclusion de mon fichier form.blade.php -->
        @include('includes.form')
        <div class="form-group">
            <input type="submit" value="Ajouter un employer" class="btn btn-success">
        </div>
    </form>
</div>

@endsection