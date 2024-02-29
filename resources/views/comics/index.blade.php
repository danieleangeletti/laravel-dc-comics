@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <div class="container">
        <a href="{{route ('comics.create')}}" class="btn btn-primary w-100 mt-3 mb-3">ADD COMIC</a>
            <div class="row">
                @foreach ($comics as $index => $comic)
                    <div class="col-3 pb-3">
                        <div class="card h-100" style="width: 18rem;">
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
                                <a href="{{route ('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">SHOW</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection