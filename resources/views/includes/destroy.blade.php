<form action="/user/{{$user->id}}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Supprimer</button>
</form>