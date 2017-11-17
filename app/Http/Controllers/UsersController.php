<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function showProfile($id)
    {
      $user =  User::find($id);
      return view('userProfile')->with('user', $user);
    }
}
