<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comic_data = $request->all();

        $comic = new Comic();
        $comic->title = $comic_data['title'];
        $comic->description = $comic_data['description'];
        $comic->thumb = $comic_data['thumb'];
        $comic->price = $comic_data['price'];
        $comic->series = $comic_data['series'];
        $comic->sale_date = $comic_data['sale_date'];
        $comic->type = $comic_data['type'];
        $comic->artists = $comic_data['artists'];
        $comic->writers = $comic_data['writers'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic_data = $request->all();

        $comic = Comic::findOrFail($id);
        $comic->title = $comic_data['title'];
        $comic->description = $comic_data['description'];
        $comic->thumb = $comic_data['thumb'];
        $comic->price = $comic_data['price'];
        $comic->series = $comic_data['series'];
        $comic->sale_date = $comic_data['sale_date'];
        $comic->type = $comic_data['type'];
        $comic->artists = $comic_data['artists'];
        $comic->writers = $comic_data['writers'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
