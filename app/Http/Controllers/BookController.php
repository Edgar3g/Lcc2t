<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::with('editora')->get();

        return response()->json([
            'books' => $books
        ]);
    }

    public function store(Request $request){

        $book = Book::query()->create([
            'title' => $request->title,
            'category' => $request->category,
            'author' => $request->author,
            'isbn' => $request->isbn,
            'stock_quantity' => $request->stock_quantity,
            'editors_id' => $request->editors_id,
            'price' => $request->price,
        ]);


        return response()->json([
            'book' => $book
        ]);
    }
}
