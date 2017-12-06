<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\User;

class FormController extends Controller
{
    public function handleForm(Request $request)
    {
      $x=$request->only('uno','tres','cinco','seis',' ocho','diez');
      $y=$request->only('dos','cuatro','seis', 'ocho','diez');
      $summX = 0;
      $summY = 0;

      foreach ($x as $value) {

        $summX+=$value;
      }

      foreach ($y as $value) {

        $summY+=$value;
      }
      $mainProjects = Project::whereBetween('summX',[$summX - 10, $summX + 10])
                              ->whereBetween('summY',[$summY - 10, $summY + 10])
                                ->take(10)->get();

      $user = User::find(Auth::User()->id);
      $user->summX = $summX;
      $user->summY = $summY;
      $user->save();



      return view('projectsList')->with('mainProjects', $mainProjects);

    }



    public function index()
    {
      return view('firstForm');
    }


}
