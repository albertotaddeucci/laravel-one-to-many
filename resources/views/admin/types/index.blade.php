@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Tipi di progetti</h1>
    <ul class="pt-4 list-group list-group-flush">
        @foreach ($types as $type)  
        <li class="list-group-item list-group-item-action">
            <div class="row">
                <div class="col">{{$type->title}}</div>
                {{-- <div class="col text-end"><a href="{{route('admin.projects.show', $project->id)}}">Esplora</a></div> --}}
            </div>
        </li>        
        @endforeach
    </ul>

    {{-- <a href="{{route('admin.projects.create')}}" class="btn btn-primary my-5">Aggiungi un progetto</a> --}}
</div>
@endsection