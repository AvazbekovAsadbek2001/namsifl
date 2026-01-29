<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(25);
        return view('admin.books.index',compact('books'));
    }

    public function create(){
        return view('admin.books.create');
    }

    public function store(StoreBookRequest $request)
    {
        $data = $request->validated();

        // Rasmni saqlash
        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('books/covers', 'public');
            $data['cover_image'] = '/storage/' . $path;
        }

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('books/files', 'public');
            $data['file'] = '/storage/' . $path;
        }

        Book::create($data);

        return redirect()
            ->route('admin.book.index')
            ->with('success', 'Kitob muvaffaqiyatli qo‘shildi!');
    }
}
