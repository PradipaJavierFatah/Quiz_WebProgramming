<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    //
    public function home(){
        $movies = Movie::paginate(4);

        return view('home',['movies'=>$movies]);
    }

    public function create(){
        $genres = Genre::all();
        return view('create',['genres'=>$genres]);
    }
    public function store(Request $request){
        //1. validasi
        $validated = $request->validate([
            'genre_id'=>'required',
            'title'=>'required|max:20',
            'description'=>'required|max:50',
            'publish_date'=>'required|date|before_or_equal:today',
            'photo'=> 'required|image|max:5120'
        ]);

        //2. store ke database
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->genre_id = $request->genre_id;
        $movie->description = $request->description;
        $movie->publish_date = $request->publish_date;


        $movie->photo =$request->photo->store('/cover','public');;
        $movie->save();


        //3. redirect ke detail dengan pesan sukses disimpan
        return redirect()->route('home')->with('success',true);
    }

    public function delete(Movie $movie){
        Storage::disk('public')->delete($movie->photo);
        $movie->delete();

        return redirect()->route('home')->with('success-remove',true);

    }
}
