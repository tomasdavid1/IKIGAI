<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function showProfile()
    {
      $user =  User::find(Auth::User()->id);
      return view('userProfile')->with('user', $user);
    }

    public function editProject(Request $request)
    {

      $project = Project::find(Auth::User()->id);

      $project->validate(

        //aca van las  reglas de validacion
      );
      $project->save( $request->all() );

    }
}
