@extends('layouts.app')

@section('page-title', $comic->title. ' Edit')

@section('main-content')
<h1>{{ $comic->title }} Edit</h1>

<div class="row">
    <div class="col py-4">
        <div class="mb-4">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla pagina principale</a>
        </div>
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="thumb" class="form-label">SRC</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci la SRC..." maxlength="1024" value="{{ $comic->src }}">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." maxlength="64" required value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..." maxlength="16" required value="{{ $comic->type }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo..." value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie..." required value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <textarea class="form-control" id="sale_date" name="sale_date" rows="3" placeholder="Inserisci la data di vendita...">{{ $comic->sale_date }}</textarea>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Inserisci gli artisti...">{{ $comic->artists }}</textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Inserisci gli scrittori...">{{ $comic->writers }}</textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione...">{{ $comic->description }}</textarea>
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">Aggiorna</button>
            </div>
        </form>
    </div>
</div>
@endsection
