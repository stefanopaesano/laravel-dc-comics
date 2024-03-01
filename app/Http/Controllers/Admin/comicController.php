<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\comics;

class comicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
            public function index()
        {
            $comics = Comic::all();
        return view('comics.index', compact('comics'));
        }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comics_data = $request->all();
        $comic = new Comic();
        $comic->title = $comics_data['title'];
        $comic->description = $comics_data['description'];
        $comic->thumb = $comics_data['thumb'];
        $comic->price = $comics_data['price'];
        $comic->series = $comics_data['series'];
        $comic->sale_date = $comics_data['sale_date'];
        $comic->type = $comics_data['type'];
        $comic->artist = $comics_data['artists'];
        $comic->writers = $comics_data['writers'];
        $comic->save();

         return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
