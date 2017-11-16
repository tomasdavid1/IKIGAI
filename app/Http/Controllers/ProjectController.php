<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{


    public function createProject(Request $request)
    {

      $this->validate($requst, [

        //aca van las reglas de validacion''
        // ej 'title' => 'required|string|etc',
        //     'descripcion' => 'required'

      ],
      [

        //aca van los mensajes ej 'title.required => 'el campo es requerido' sino te aparece en ingles



      ]);

      $newProject = new Project($request->all();)
      $newProject->save();

      return redirect()->route('creationSuccesful!');

    }

    public function index()
    {
      return view('createProject');
    }

    public function showProjectEditor()
    {
      return view('projectEditor');
    }

    public function modifyProject(Request $request)
    {

      $project = Project::find($id);

      $project->validate(

        //aca van las mismas reglas de validacion que van para el create
      );
      $project->save( $request->all() );





    }



}
