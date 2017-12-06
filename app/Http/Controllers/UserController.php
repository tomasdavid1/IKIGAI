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

    public function editUser(Request $request)
    {

      $user = User::find(Auth::User()->id);

      $user->validate(

        //aca van las  reglas de validacion
      );
      $project->save( $request->all() );

    }

    public function myProjects($value='')
    {
      $myProjects =   DB::table('projects_authors')
                          ->join('projects', 'projects.id', '=', 'projects_id')
                          ->select('users.*', 'contacts.phone', 'orders.price')
                          ->where('authors_id', '=', Auth::User()->id)
                          ->get();

      return view('myProjects')->with('myProjects', $myProjects);
    }


}
