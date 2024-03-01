@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
    <main>
        <div class="container">
        <a href="{{route ('comics.index')}}" class="btn btn-primary mt-3 mb-3">GO COMICS INDEX</a>
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{substr($comic->description, 0, 40)}}...</p>
                    <p class="card-text">{{$comic->price}}</p>
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">{{$comic->sale_date}}</p>
                    <p class="card-text">{{$comic->type}}</p>
                    <p class="card-text">Artists: {{substr($comic->artists, 0, 40)}}...</p>
                    <p class="card-text">Writers: {{substr($comic->writers, 0, 40)}}...</p>
                </div>
            </div>
        </div>
    </main>
@endsection