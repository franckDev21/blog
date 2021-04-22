@extends('base')
@section('content')

<!-- contenu de mon admin.index qui serra charger dans base.blade -->
<div class="container">
    <main style="margin-top: 100px;">
        <section class="alert alert-secondary">
            <h1>Bienvenue sur notre site  {{ config('app.name') }}</h1>
            <p>C'est un site de gestion d'employer {{ date('H:i A') }}</p>
        </section>
    </main>
</div>

@endsection