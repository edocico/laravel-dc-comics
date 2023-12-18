@extends('layouts.app')

@section('content')

    <section class="my-5 py3">
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">

                @csrf
                
                <div class="mb-3">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title">
                  
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Descrizione</label>
                  <input type="text" class="form-control" id="description">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" class="form-control" id="price">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di vendita</label>
                    <input type="text" class="form-control" id="sale_date">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type">
                </div>

                {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div> --}}
                
                <button type="submit" class="btn btn-primary">Invia</button>
            </form>
            <div class="my-4">
                <a href="{{ route('comics.index') }}">Back to index</a>
            </div>  
        </div>
    </section>
    
@endsection