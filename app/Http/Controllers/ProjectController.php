<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{


    public function createProject(Request $request)
    {

      $request->validate( [
       'title'=>'required|max:25',
       'location'=>'required',
       'summary'=>'required|max:150',
       'description'=> 'required',
      ],
      [
        //aca van los mensajes ej 'title.required => 'el campo es requerido' sino te aparece en ingles
      ]);
      $datos = $request->all();
      $datos['author'] = Auth::User()->id;
      $datos['rating'] = 0;
      $newProject = new Project($datos);
      $newProject->save();

      \DB::table('projects_authors')
        ->insert(['project_id' => $newProject->id , 'author_id' => Auth::User()->id]);

      return view('home');

    }



    public function index()
    {
      return view('createProject');
    }



    public function showMyProjects()
    {
      $myProjects =   \DB::table('projects_authors')
                          ->join('projects', 'projects.id', '=', 'projects_authors.project_id')
                          ->where('author_id', '=', Auth::User()->id)
                          ->get();

      return view('myProjects')->with('myProjects', $myProjects);

    }


    public function showMyRecommendedProjects($value='')
    {

      $summX = User::find(Auth::User()->summX);
      $summY = User::find(Auth::User()->summY);
      $mainProjects = Project::whereBetween('summX',[$summX - 10, $summX + 10])
                              ->whereBetween('summY',[$summY - 10, $summY + 10])
                                ->take(10)->get();

      return view('projectList')->with('mainProjects', $mainProjects);
    }

    public function editMyProjects(Request $request)
    {
      $request->validate( [
       'title'=>'required|max:25',
       'location'=>'required',
       'summary'=>'required|max:150',
       'description'=> 'required',
      ],
      [
        //aca van los mensajes ej 'title.required => 'el campo es requerido' sino te aparece en ingles
      ]);

      $datos = $request->all();
      $datos['author'] = Auth::User()->id;
      $datos['rating'] = 0;
      $newProject = new Project($datos);
      $newProject->save();
    }



    public function becomeCollaborator(Request $request)
    {

      $newMessage = new PartnershipMessage();
      $newMessage->save($request->all());

    }

    public function confirm($value='')
    {



    }



}
