<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Log;

class MainController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('main.index',['books'=>$books]);
    }

    public function post(Request $request) {
        $book = new Book();
        $book->name = $request->name;
        $book->save();
        $books = Book::all();
        return view('main.index',['books'=>$books]);
    }
}
