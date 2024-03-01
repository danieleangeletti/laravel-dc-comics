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
                                <p class="card-text">{{substr($comic->description, 0, 40)}}...</p>
                                <p class="card-text">{{$comic->price}}</p>
                                <p class="card-text">{{$comic->series}}</p>
                                <p class="card-text">{{$comic->sale_date}}</p>
                                <p class="card-text">{{$comic->type}}</p>
                                <p class="card-text">Artists: {{substr($comic->artists, 0, 40)}}...</p>
                                <p class="card-text">Writers: {{substr($comic->writers, 0, 40)}}...</p>
                                <a href="{{route ('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">SHOW</a>
                                <a href="{{route ('comics.edit', ['comic' => $comic->id])}}" class="btn btn-warning">EDIT</a>
                                <form onsubmit="return confirm('Are you sure you want to delete this item?')" action="{{route ('comics.destroy', ['comic' => $comic->id])}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        DELETE
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection