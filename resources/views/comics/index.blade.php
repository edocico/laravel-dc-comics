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
                        <td><a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Cancella" class="my-4">
                            </form>
                        </td>
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