<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Artist::all();
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'artist_name'          =>  'required',
        ]);

        $artist = new Artist;

        $artist->artist_name = $request->artist_name;
        $artist->save();

        return redirect()->route('artists.index')->with('success', 'Artists Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return view('show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artist $artist)
    {
        return view('edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'artist_name'      =>  'required',
        ]);

        $artist = Artist::find($request->hidden_id);

        $artist->artist_name = $request->artist_name;


        $artist->save();

        return redirect()->route('artists.index')->with('success', 'Artists Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artists.index')->with('success', 'Artists Data deleted successfully');

    }
}
