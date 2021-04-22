@extends('base')
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container">
    <h1 class="mt-4">Nouveau l'employer</h1>
    <hr>
    <form action="{{ route('admin_') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control @error('nom')  is-invalid @enderror">
                    @error('nom')
                    <div class="invalid-feedback">{{ $errors->first('nom') }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="socite">societer</label>
                    <select name="socite" id="socite" class="form-control @error('socite') is-invalid @enderror">
                        @foreach($societes as $org)
                        <option value="{{ $org->id }}">{{ $org->nom }}</option>
                        @endforeach
                    </select>
                    @error('socite')
                    <div class="invalid-feedback">{{ $errors->first('socite') }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="prenom">prenom</label>
                    <input type="text" name="prenom" class="form-control @error('prenom') is-invalid @enderror">
                    @error('prenom')
                    <div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pass">mot de passe</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tel">telephone</label>
                    <input type="text" name="tel" class="form-control @error('tel') is-invalid @enderror">
                    @error('tel')
                    <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Ajouter un employer" class="btn btn-success">
        </div>
    </form>
</div>

@endsection