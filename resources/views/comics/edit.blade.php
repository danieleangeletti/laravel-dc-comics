@extends('layouts.app')

@section('page-title', $comic->title. 'edit')

@section('main-content')
    <main>
        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{ old('title', $comic->title) }}" type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Insert title..." maxlength="256">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input value="{{old('description', $comic->description)}}" type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Insert description..." maxlength="1024">
                @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input value="{{old('thumb', $comic->thumb)}}" type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" placeholder="Insert thumb" maxlength="1024">
                @error('thumb')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value="{{old('price', $comic->price)}}" type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Insert price..." maxlength="32">
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input value="{{old('series', $comic->series)}}" type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Insert series..." maxlength="256">
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input value="{{old('sale_date', $comic->sale_date)}}" type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Insert sale date..." maxlength="16">
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input value="{{old('type', $comic->type)}}" type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Insert type..." maxlength="64">
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input value="{{old('artists', $comic->artists)}}" type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Insert artists..." maxlength="512">
                @error('artists')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input value="{{old('writers', $comic->writers)}}" type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Insert writes..." maxlength="512">
                @error('writers')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="btn btn-warning w-100">
                    EDIT
                </button>
            </div>

        </form>
        </div>
    </main>
@endsection