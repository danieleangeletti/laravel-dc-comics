@extends('layouts.app')

@section('page-title', $comic->title. 'edit')

@section('main-content')
    <main>
        <div class="container">

            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{$comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="Insert title..." maxlength="256" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input value="{{$comic->description}}" type="text" class="form-control" id="description" name="description" placeholder="Insert description..." maxlength="1024" required>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input value="{{$comic->thumb}}" type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert thumb" maxlength="1024">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input value="{{$comic->price}}" type="text" class="form-control" id="price" name="price" placeholder="Insert price..." maxlength="32">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input value="{{$comic->series}}" type="text" class="form-control" id="series" name="series" placeholder="Insert series..." maxlength="256" required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input value="{{$comic->sale_date}}" type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date..." maxlength="16" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input value="{{$comic->type}}" type="text" class="form-control" id="type" name="type" placeholder="Insert type..." maxlength="64">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input value="{{$comic->artists}}" type="text" class="form-control" id="artists" name="artists" placeholder="Insert artists..." maxlength="512" required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input value="{{$comic->writers}}" type="text" class="form-control" id="writers" name="writers" placeholder="Insert writes..." maxlength="512" required>
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