<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Proyecto;

class FormController extends Controller
{
    public function handleForm(Request $request)
    {
      $cosas=$request->only('uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez');
      $summ = 0;


      foreach ($cosas as $value) {

        $summ+=$value;
      }
      $mainProyects = Proyecto::whereBetween('X',[$summ - 10, $summ + 10])->take(10)->get();
      $user = User::find(Auth::User()->id);
      $user->summ = $summ;
      $user->save();
      $user->x;
      $user->y;

      return view('proyectsList')->with('mainProyects', $mainProyects);

    }



    public function index()
    {
      return view('firstForm');
    }

}
