<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\BookController;
use Illuminate\Routing\Controller;

class BookCategoryController extends Controller
{
    public static function find($id){
        $category = Category::find($id);
        return view('category', compact('category'));
    }
}
