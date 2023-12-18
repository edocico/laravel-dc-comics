@extends('layouts.app')

@section('content')

<section>
    <div class="container">

        <table class="table my-3">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Immagine</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data vendita</th>
                    <th>Tipo</th>
                    <th>
                        <a href="{{ route('comics.create') }}" class="btn btn-sm btn-primary">Nuovo fumetto</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic) }}">{{ $comic->title }}</a>
                        </td>
                        <td>{{ $comic->description }}</td>
                        <td>
                            <img src="{{ $comic->thumb }}" width="100" alt="">
                        </td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                    </tr>
                    
                @empty
                <tr>
                    <td colspan="8">
                        Nessun fumetto trovato
                    </td>
                </tr>
                    
                @endforelse
            </tbody>

        </table>

    </div>
</section>
    
@endsection