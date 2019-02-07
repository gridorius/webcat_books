<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      $users = User::select('user_id', 'name')->get();
      $books = Book::select('user_id', 'name')->get();
      return view('home', ['users' => $users, 'books' => $books]);
    }
}
