<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public static function index(){
        $books = Book::all();
        return view('index', compact('books'));
    }

    public static function find($id){
        $book = Book::find($id);
        return view('detail', compact('book'));
    }
}
