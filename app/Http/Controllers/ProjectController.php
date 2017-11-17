<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;

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

      $newProject = new Project();
      $newProject->save($request->all());

      DB::table('projects_authors')
        ->insert(['project_id' => $newProject->id , 'user_id' => Auth::User()->id]);

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

    public function editProject(Request $request)
    {

      $project = Project::find($id);

      $project->validate(

        //aca van las mismas reglas de validacion que van para el create
      );
      $project->save( $request->all() );

    }

    public function becomeCollaborator(Request $request)
    {



    }

    public function FunctionName($value='')
    {
      # code...
    }



}
