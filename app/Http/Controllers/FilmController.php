<?php

namespace App\Http\Controllers;

use App\Models\{Category ,Film};
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug = null)
    {
        $query = $slug ? Category::whereSlug($slug)->firstOrFail()->films() : Film::query();

        $films = $query->orderBy('created_at', 'desc')->paginate(5);

        $categories = Category::all();

        return view('movies.index', compact('films', 'categories', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:films|max:255',
            'year' => 'required|numeric',
            'description' => 'required',
        ]);

        $film = Film::create([
            'title' => $validated['title'],
            'year' => $validated['year'],
            'description' => $validated['description'],
        ]);

        return redirect()->route('films.index')->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        return view('movies.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        
        return view('movies.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|numeric',
            'description' => 'required',
        ]);

        Film::find($id)->update([
            'title' => $validated['title'],
            'year' => $validated['year'],
            'description' => $validated['description'],
        ]);

        return redirect()->back()->with('success', 'Film updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Film::destroy($id);

        return redirect()->back()->with('success', 'Movie deleted successfully');
    }
}