<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function add(Request $r){
      $book = new Book();
      $book->name = $r->name;
      $book->save();
      return response(['status' => true])->setStatusCode(200, 'successful create');
    }

    public function getAll(){
      return response(
        Book::all()
        )->header('content-type', 'application/json')->setStatusCode(200, 'list books');
    }

    public function get($id){
      return response(
        Book::where('book_id', $id)->first()
        )header('content-type', 'application/json')->setStatusCode(200, 'found book');
    }

    public function edit(Request $r, $id){
      $book = Book::where('book_id', $id)->first();
      $book->name = $r->name;
      $book->save();
      return response(['status' => true])->setStatusCode(200, 'successful editing');
    }

    public function remove($id){
      Book::where('book_id', $id)->delete();
      return response(['status' => true])->setStatusCode(200, 'successful delete');
    }
}
