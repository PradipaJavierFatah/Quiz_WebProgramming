<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function showList(){
        $books = Book::paginate(2);
        return view('book.list', ['books' => $books]);
    }

    public function showDetail($id){
        $book = Book::find($id);
        $genres = Genre::all();

        $datas = [
            'book' => $book,
            'genres' => $genres
        ];

        return view('book.detail', $datas);
    }

    public function viewForm(){
        $genres = Genre::all();
        return view('book.create', ['genres' => $genres]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'genre_id' => 'required',
            'name' => 'required|max:100',
            'description' => 'required|max:200',
            'publish_date' => 'required|date|before_or_equal:today',
            'photo' => 'required|image|max:1024'
        ]);

        $book = new Book();
        $book->name = $request->name;
        $book->genre_id = $request->genre_id;
        $book->description = $request->description;
        $book->publish_date = $request->publish_date;
        $book->photo = $request->photo->store('/cover', 'public');
        $book->save();

        return redirect()->route('book.detail', ['id' => $book->id])->with('success', true);
    }

    public function update(Request $request, Book $book){
        $validated = $request->validate([
            'genre_id' => 'required',
            'name' => 'required|max:100',
            'description' => 'required|max:200',
            'publish_date' => 'required|date|before_or_equal:today',
            'photo' => 'nullable|image|max:1024'
        ]);

        $book->name = $request->name;
        $book->genre_id = $request->genre_id;
        $book->description = $request->description;
        $book->publish_date = $request->publish_date;

        if ($request->photo) {
            Storage::disk('public')->delete($book->photo);
            $book->photo = $request->photo->store('/cover', 'public');
        }

        $book->save();

        return redirect()->route('book.detail', ['id' => $book->id])->with('success', true);
    }

    public function delete(Book $book){
        $book->delete();
        return back()->with('success', true);
    }
}
