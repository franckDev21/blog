@extends('base')
@section('my_css_link')
<link rel="stylesheet" href="{{ URL::asset('css/admin/register.css') }}">
@endsection
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container text-center">
    <form class="form-signin " style="margin-top:100px">
        <img class="mb-4" src="{{ asset('images/diamond.svg') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Inscrivez vous</h1>
        <div class="row">
            <div class="col-6">
                <input type="text" id="inputEmail" class="form-control mb-2" placeholder="votre nom" name="nom" required autofocus>
                <input type="text" id="inputEmail" class="form-control mb-2" placeholder="votre prenom" name="prenom" required autofocus>
                <input type="tel" id="tel" class="form-control mb-2" placeholder="téléphone" name="tel" required>
            </div>
            <div class="col-6">
                <input type="text" id="inputEmail" class="form-control mb-2" placeholder="adresse mail" name="email" required autofocus>
                <input type="password" id="inputPassword" class="form-control mb-2" placeholder="mot de passe" name="password" required>
                <select class="form-control" name="org" id="">
                    <option value="1">Microsoft</option>
                    <option value="2">Apple</option>
                </select>
            </div>
        </div>

        <button class="mt-4 btn btn-lg btn-primary btn-block" type="submit">s'inscrire</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</div>

@endsection