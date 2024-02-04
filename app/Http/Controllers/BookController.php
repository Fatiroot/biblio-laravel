<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
public function index(){
    $books=Book::all();
    return view('admin.book.index',compact('books'));

}

public function create(){
    return view('admin.book.create');

}

public function store(Request $request){ 
    $validatedData = $request->validate([
        'title' => ['required'],
        'author' => ['required'],
        'genre' => ['required'],
        'description' => ['required'],
        'publication_year' => ['required'],
        'total_copies' => ['required', 'numeric'],
        'available_copies' => ['required', 'numeric'],
        
    ]);

    $book = Book::create($request->all());
    return redirect()->route('books.index');
}
public function edit(Book $book)
{
    //
    return view('admin.book.edite',[ 'book'=>$book]);
}
public function update(Request $request, Book $book)
{
    //
    $book->update($request->all());
    return redirect()->route('books.index');
}

public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index');
}

public function all()
{
    $books=Book::all();
    $userAuth = Auth::user();
    return view('home',compact('books','userAuth'));
}

}
