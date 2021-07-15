@extends('layouts.master')

@section('title','projet laravel')
@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <a class="btn btn-primary btn-lg" href="{{ route('ville.create') }}">Ajouter</a>

        <ul class="list-unstyled">
            @foreach ($villes as $ville)
            <li>
                {{ $ville->nom }}
                <a class="btn btn-outline-warning btn-sm" href="{{ url('/ville/'.$ville->id.'/edit') }}">
                    <i class="fa fa-edit"></i>
                </a>
                <form action="{{ url('/ville/'.$ville->id) }}" method="post">
                    @method('DELETE')
                    @csrf()
                    <button class="btn btn-outline-danger">Delete</button>
                </form>
            </li>
            @endforeach

        </ul>
    </div>
</div>
@endsection
