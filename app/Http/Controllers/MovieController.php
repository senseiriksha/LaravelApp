<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\MovieRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class MovieController extends Controller
{
    public function __construct(private MovieRepository $movieRepository)
    {
        
    }

    public function index()
    {
        Gate::authorize('index', Movie::class);

        // return Movie::all()->fetchObject();
        
        // $query = DB::table('movies')->select('name as naziv', 'year')->where('year', '<', 2024)->orderBy('year')->limit(1);
        // $query = DB::table('movies')->select('name as naziv', 'year')->offset(2)->limit(3);
        // $query = DB::table('movies')->insert([
        //     [
        //         'name' => 'Smile 2',
        //         'producer' => 'Paramount Pictures',
        //         'year' => '2024'
        //     ],
        //     [
        //         'name' => 'Die Hart',
        //         'producer' => '20 Century Fox',
        //         'year' => '2023'
        //     ]
        // ]);

        // $query = DB::table('movies')->where('name', 'Smile 2')->update([
        //         'name' => 'Smile II'
        // ]);

        // $query = DB::table('movies')->where('name', 'Smile II')->delete();

        // dd(
        //     $query->get()
        // );

        return view('movies.index', [
            'movie' => Movie::all()->toArray()
        ]);
    }

    public function show(string $id)
    {
        return Movie::findOrFail($id);

        // dd($movie->genres->toArray());
    }

    // public function removeMovie(string $name)
    // {
    //     return $this->movieRepository->removeMovie($name);
    // }

    // public function editMovie(string $name, string $newName)
    // {
    //     return $this->movieRepository->editMovie($name, $newName);
    // }

}
