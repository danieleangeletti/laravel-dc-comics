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
        $validated_data = $request->validate([
            'title' => 'required|max:256',
            'description' => 'required|max:1024',
            'thumb' => 'nullable|max:1024',
            'price' => 'required|max:32',
            'series' => 'required|max:256',
            'sale_date' => 'required|date',
            'type' => 'nullable|max:64',
            'artists' => 'required|max:512',
            'writers' => 'required|max:512',

        ]);

        $comic = Comic::create($validated_data);

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
        $validated_data = $request->validate([
            'title' => 'required|max:256',
            'description' => 'required|max:1024',
            'thumb' => 'nullable|max:1024',
            'price' => 'required|max:32',
            'series' => 'required|max:256',
            'sale_date' => 'required|date',
            'type' => 'nullable|max:64',
            'artists' => 'required|max:512',
            'writers' => 'required|max:512',

        ]);

        $comic = Comic::findOrFail($id);
        $comic->update($validated_data);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
