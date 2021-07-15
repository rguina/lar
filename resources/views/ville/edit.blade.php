<form action="{{ url('/ville/'.$ville->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="nom" value="{{ $ville->nom }}" >
    <button>Modifier</button>
</form>