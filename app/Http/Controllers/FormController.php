<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class FormController extends Controller
{
    public function handleForm(Request $request )
    {
      $cosas=$request->only('uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez');
      $summ = 0;

      foreach ($cosas as $value) {

        $summ+=$value;

      }
      $mainProyects = Proyecto::whereBetween('summ',[$summ - 10, $summ + 10])->take(10)->get();

      return view('proyectsList')->with('mainProyects', $mainProyects);

    }



    public function index()
    {
      return view('firstForm');
    }

}
