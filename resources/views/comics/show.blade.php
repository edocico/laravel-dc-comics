@extends('layouts.app')

@section('content')

<section>
    <div class="container">

        <h1 class="text-center my-5">{{ $comic->title }}</h1>

        <div class="row">
            <div class="col-6">
                <figure>
                    <img src="{{ $comic->thumb }}" width="400" alt="">
                </figure>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column">
                <p>
                    {{ $comic->description }}
                </p>
                <p class="my-5">
                    {{ $comic->price }}
                </p>
            </div>
        </div>
        <div class="my-5">
            <a href="{{ route('comics.index') }}">Back to comics list</a>
        </div>

    </div>
</section>
    
@endsection