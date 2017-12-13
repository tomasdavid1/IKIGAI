<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\PartnershipMessage;

class MessageController extends Controller
{

  public function createMessage(Request $request)
  {
    $this->validate($requst, [
    'body' => 'require' | 'max:400'
    ],
    [
      //aca van los mensajes ej 'title.required => 'el campo es requerido' sino te aparece en ingles
    ]);
    $newMessage = new Message();
    $newMessage->save($request->all());
  }


  public function listMessages($value='')
  {
    $myProjects =  \DB::table('messages')
                        ->select('*')
                        ->groupBy('reciever_id')
                        ->orderby('created_at', 'DESC')
                        ->get();

    return view('myMessages')->with('myMessages', $myMessages);
  }

  public function becomeCollaborator(Request $request)
  {


    $id = $request->input('id');
    $project = Project::find($id);
    $author = $project->author;
    $body = $request->input('why');
    $datos['sender_id'] = Auth::User()->id;
    $datos['reciever_id'] = $author;
    $datos['body'] = $body;
    $datos['project_id'] = $id;
    $newPartnershipRequest = new PartnershipMessage($datos);
    $newPartnershipRequest->save();

    return view('listProject');

  }

  public function showPartnershipRequests($value='')
  {
    $messages = \DB::table('partnership_messages')
                        ->select('*')
                        ->where('reciever_id', '=', Auth::User()->id)
                        ->where('status', '=', NULL)
                        ->orderby('created_at', 'DESC')
                        ->get();
    return view('')

  }

  public function requestDecision(Request $request)
  {




    $status = $request->input('status');



    if ($status = 1) {


      $project =  $request->input('');
      \DB::table('projects_collaborators')
        ->insert(['project_id' => $project->id , 'collaborator_id' => Auth::User()->id]);

      $partnershipMessage = find($request->input('id'));


      \DB::table('partnershipMessages')
        ->insert([1 => $partnershipMessages->status]);




    } else {

    $project =  $request->input('');


    $partnershipMessage = find($request->input('id'));


    \DB::table('partnershipMessages')
      ->insert([0 => $partnershipMessages->status]);

          }

  }



}
