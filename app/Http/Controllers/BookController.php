<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json($books, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isbn' => 'required|string|max:13',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
        ]);

        $book = Book::create([
            'judul' => $request->judul,
            'isbn' => $request->isbn,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
        ]);
    
        return response()->json($book, 201);
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $this->middleware('admin');

        $book->judul = $request->input('judul');
        $book->isbn = $request->input('isbn');
        $book->penulis = $request->input('penulis');
        $book->tahun_terbit = $request->input('tahun_terbit');
        $book->save();

        return response()->json(['message' => 'Book updated successfully'], 200);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);

        $this->middleware('admin.check');

        // Hapus buku
        $book->delete();

        return response()->json(['message' => 'Book deleted successfully'], 200);
    }
}
