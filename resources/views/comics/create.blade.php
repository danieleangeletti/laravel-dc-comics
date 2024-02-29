@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <main>
        <div class="container">

            <form action="{{ route('comics.store') }}" method="POST">
            
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Insert title..." maxlength="256" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Insert description..." maxlength="1024" required>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert thumb" maxlength="1024">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Insert price..." maxlength="32">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Insert series..." maxlength="256" required>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Insert sale date..." maxlength="16" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="tyoe" placeholder="Insert type..." maxlength="64">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <input type="text" class="form-control" id="artists" name="artists" placeholder="Insert artists..." maxlength="512" required>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <input type="text" class="form-control" id="writers" name="writers" placeholder="Insert writes..." maxlength="512" required>
            </div>

            <div>
                <button type="submit" class="btn btn-success w-100">
                    + ADD
                </button>
            </div>

        </form>
        </div>
    </main>
@endsection