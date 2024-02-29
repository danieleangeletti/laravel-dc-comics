@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <div class="container">
            <div class="card" style="width: 18rem;">
                <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->price}}</p>
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">{{$comic->sale_date}}</p>
                    <p class="card-text">{{$comic->type}}</p>
                    <p class="card-text">Artists: {{$comic->artists}}</p>
                    <p class="card-text">Writers: {{$comic->writers}}</p>
                </div>
            </div>
        </div>
    </main>
@endsection