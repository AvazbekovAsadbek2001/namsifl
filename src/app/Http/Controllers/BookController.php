<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(25);
        return view('books.index',compact('books'));
    }

    public function show(Request $request){
        $book = Book::find($request->id);
        return view('books.show',compact('book'));
    }
}


