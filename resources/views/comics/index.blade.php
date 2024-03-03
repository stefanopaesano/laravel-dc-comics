@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
    Comics Index
</h1>

<h2>
    <div class="row">
        <table class="table">
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success w-100 fs-5">
                + Aggiungi
            </a>
        </div>
            <div class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                   
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di vendita</th>
                    <th scope="col">Tipo</th>
                   
                </tr>
            </div>
            <div class="tbody">
                
                @foreach ($comics as $comic)
                    <tr>
                         <td scope="row"> 
                            {{$comic->id}} 
                        </td> 

                        <td>{{$comic->title}}</td>
                        <td>${{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td>{{$comic->type}}</td>
                       
                        <td>
                            <a href="{{ route('comics.show', ['comic'=> $comic->id]) }}" class="btn btn-primary">vedi</a>
                        </td>
                        <td>
                            <a href="{{ route('comics.edit', ['comic'=> $comic->id]) }}" class="btn btn-primary">modifica</a>
                        </td>
                    </tr>
                    
                @endforeach
            </div>
        </div>
    </div> 
</h2>
@endsection
