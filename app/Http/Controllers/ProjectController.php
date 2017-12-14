<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{



    public function __construct()
    {
      $this->middleware('auth');
    }

    public function createProject(Request $request)
    {



      $request->validate( [
       'title'=>'required|max:25',
       'summary'=>'required|max:150',
       'description'=> 'required'
      ],
      [
        //aca van los mensajes ej 'title.required => 'el campo es requerido' sino te aparece en ingles
      ]);
      $summX = 0;
      $summY = 0;
      $datos['title'] = $request->input('title');
      $impact = $request->input('impact');
      if ($impact == -1) {
        $summX+= -2;
        $summY+= -2;
      } elseif( $impact == 0){
        $summX+= 1;
        $summY+= 1;
      } else {
        $summX+= 5;
        $summY+= 5;
      }
      $culture = $request->input('culture');

      if ($culture == -1) {
        $summX+= 5;
        $summY+= -5;
      } elseif( $culture == 0){
        $summX+= -2;
        $summY+= 2;
      } else {
        $summX+= -5;
        $summY+= 5;
      }
      $field = $request->input('field');
      if ($field = 1) {
        $summX+= -10;
        $summY+= 10;
      } elseif( $field = 2){
        $summX+= 10;
        $summY+= 10;
      } elseif($field = 3) {
        $summX+= -10;
        $summY+= -10;
      } else{
        $summX+= 10;
        $summY+= -10;
      };

      $formal = $request->input('formal');
      if ($formal = 1) {
        $summX = -5;
        $summY = -5;
      } else {
        $summX = 5;
        $summY = 5;
      }


      $datos['author'] = Auth::User()->id;
      $datos['rating'] = 0;
      $datos['summary'] = $request->input('summary');
      $datos['description'] = $request->input('description');
      $datos['summX'] = $summX;
      $datos['summY'] = $summY;




      $newProject = new Project($datos);
      $newProject->save();

      \DB::table('projects_authors')
        ->insert(['project_id' => $newProject->id , 'author_id' => Auth::User()->id]);

      return redirect()->route('projectList');;

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

      $myPartnerships = \DB::table('projects_collaborators')
                          ->join('projects', 'projects.id', '=', 'projects_collaborators.project_id')
                          ->where('collaborator_id', '=', Auth::User()->id)
                          ->get();


      return view('myProjects')->with('myPartnerships', $myPartnerships)->with('myProjects', $myProjects);


    }


    public function showMyRecommendedProjects($value='')
    {

      $summX = Auth::User()->summX;
      $summY = Auth::User()->summY;
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





    public function confirm($value='')
    {



    }

    public function showProject($id)
    {
      $project =  Project::find($id);


      return view('projectView')->with('project', $project);
    }


    public function newPartnershipRequest($id)
    {
      $project =  Project::find($id);

      return view('partnershipSend')->with('project', $project);
    }


}
