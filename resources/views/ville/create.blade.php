<form action="{{ url('/ville') }}" method="post">
    @csrf
    <input type="text" name="nom">
    <button>Ajouter</button>
</form>