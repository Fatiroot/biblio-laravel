<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

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
    $book = Book::create($request->all());
    return redirect()->route('books.index');
}
}
