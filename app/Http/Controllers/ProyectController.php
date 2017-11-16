<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;

class ProyectoController extends Controller
{


    public function mostrarProyectoPrincipal($id)
    {
      //$pelicula = Proyecto::where('id', '=', $id )->get();
      $pelicula = Proyecto::find( $id );

      return view('proyectoPrincipal')->with('pelicula', $pelicula );
    }


}
