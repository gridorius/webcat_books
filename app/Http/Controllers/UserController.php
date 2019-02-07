<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function add(Request $r){
    $user = new User();
    $user->name = $r->name;
    $user->login = $r->login;
    $user->password = $r->password;
    $user->save();
    return response(['status' => true])->setStatusCode(200, 'successful create');
  }

  public function getAll(){
    return response(
      User::all()
      )->setStatusCode(200, 'list users');
  }

  public function get($id){
    $user = User::where('user_id', $id)->first();
    $user->books;
    return response($user)->setStatusCode(200, 'found user');
  }

  public function edit(Request $r, $id){
    $user = User::where('user_id', $id)->first();
    $user->name = $r->name;
    $user->login = $r->login;
    $user->password = $r->password;
    $user->save();
    return response(['status' => true])->setStatusCode(200, 'successful editing');
  }

  public function remove($id){
    User::where('user_id', $id)->delete();
    return response(['status' => true])->setStatusCode(200, 'successful delete');
  }
}
