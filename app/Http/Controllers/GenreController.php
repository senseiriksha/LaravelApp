<?php

namespace App\Http\Controllers;

use App\Dashboard;
use App\Http\Requests\StoreGenreRequest;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;

// class GenreController extends Controller implements HasMiddleware
class GenreController extends Controller
{
    public function __construct(private Dashboard $dashboard)
    {

    }

    // public static function middleware(): array
    // {
    //     return [
    //         'query-true:param'
    //     ];
    // }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($request->query('param'));
        // return $this->dashboard->welcome();

        // return response("Test 123");

        // return response('Hello World')->withHeaders([
        //     'X-Header-One' => 'foo',
        //     'X-Header-Two' => 'bar'
        //  ]);

        // return redirect()->route('home');

        // return view('welcome');

        // return response()->json([
        //     'foo' => 'bar',
        // ]);

        return view('genres.index', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request)
    {
        // dd($request->all());

        // $validated = $request->validate([
        //     'ime' => ['required', 'max:15', 'min:5'],
        //     'prezime' => ['required', 'max:15', 'min:5'],
        //     'adresa' => ['max:20']
        // ]);
        // dd($validated);

        // dd($request->validated());

        $genre = new Genre();
        
        $genre->name = $request->name;
        $genre->save();

        return redirect()->route('genres.index');
        // return [
        //     'message' => 'Uspjesno pohranjen zanr'
        // ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Genre::find($id);
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
        $genre = Genre::findOrFail($id);

        $genre->delete();
    }
}
