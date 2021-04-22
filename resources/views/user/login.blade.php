@extends('base')

@section('my_css_link')
<link rel="stylesheet" href="{{ URL::asset('css/admin/signin.css') }}">
@endsection

@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container text-center">
    <form class="form-signin " style="margin-top:100px">
        <img class="mb-4" src="{{ asset('images/diamond.svg') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Connetez vous</h1>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control mb-2" placeholder="adresse mail" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="mot de passe" name="password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> se souvenir de moi
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">login</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</div>

@endsection