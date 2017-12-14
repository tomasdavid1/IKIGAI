<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }


    public function showProfile()
    {
      $user =  User::find(Auth::User()->id);
      return view('userProfile')->with('user', $user);
    }

    public function editUser(Request $request)
    {

      $user = User::find(Auth::User()->id);

      $user->validate(

        //aca van las  reglas de validacion
      );
      $project->save( $request->all() );

    }


}
