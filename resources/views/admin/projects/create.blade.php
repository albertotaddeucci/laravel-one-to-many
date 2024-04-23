@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row align-content-center py-5">
        <div class="col-6">
            <h2 class="">Aggiungi un progetto</h2>

        </div>
        <div class="col-6">
            <a href="{{route('admin.projects.index')}}" >Torna all'indice</a>

        </div>
    </div>
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3">
            <label for="title"  class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}"  ></input>
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old('description')}}"></textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Immagine</label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{old('img')}}"></input>
            @error('img')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tech" class="form-label">Tecnologie utilizzate</label>
            <input class="form-control @error('tech') is-invalid @enderror" id="tech" name="tech" value="{{old('tech')}}" ></input>
            @error('tech')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="github_url" class="form-label">URL Github</label>
            <input class="form-control @error('github_url') is-invalid @enderror" id="github_url" name="github_url" value="{{old('github_url')}}" ></input>
            @error('github_url')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="devices" class="form-label">Per quali devices?</label>
            <input type="text" class="form-control @error('devices') is-invalid @enderror" id="devices" name="devices" value="{{old('devices')}}" ></input>
            @error('devices')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        

    
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>

</div>

    
    
@endsection