@csrf
<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" value="{{ old('nom')  ?? ($user->nom) }}" name="nom" class="form-control @error('nom')  is-invalid @enderror">
            @error('nom')
            <div class="invalid-feedback">{{ $errors->first('nom') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" value="{{ old('email') ?? ($user->email) }}" name="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="socite">societer</label>
            <select name="societe_id" id="socite" class="form-control @error('socite') is-invalid @enderror">
                @foreach($societes as $org)
                <option value="{{ $org->id }}" {{ $user->societe_id === $org->id ? 'selected':''  }}>{{ $org->nom }}</option>
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
            <input type="text" value="{{ old('prenom') ?? ($user->prenom) }}" name="prenom" class="form-control @error('prenom') is-invalid @enderror">
            @error('prenom')
            <div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tel">telephone</label>
            <input type="text" value="{{ old('tel') ?? ($user->tel) }}" name="tel" class="form-control @error('tel') is-invalid @enderror">
            @error('tel')
            <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
            @enderror
        </div>
    </div>
</div>