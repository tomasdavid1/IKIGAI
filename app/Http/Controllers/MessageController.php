<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use App\PartnershipMessage;

class MessageController extends Controller
{




  public function __construct()
  {
    $this->middleware('auth');
  }

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
    $body = $request->input('body');
    $datos['sender_id'] = Auth::User()->id;
    $datos['reciever_id'] = $author;
    $datos['body'] = $body;
    $datos['project_id'] = $id;
    $newPartnershipRequest = new PartnershipMessage($datos);
    $newPartnershipRequest->save();

    return redirect()->route('projectList');

  }

  public function showPartnershipRequests($value='')
  {
    $messages = \DB::table('partnership_messages')
                        ->select('*')
                        ->where('reciever_id', '=', Auth::User()->id)
                        ->where('status', '=', 0)
                        ->orderby('created_at', 'DESC')
                        ->get();
    return view('messenger')->with('messages', $messages);

  }

  public function requestDecision(Request $request)
  {
    $status = $request->input('decision');

    if ($status == 'Accept') {

      $project_id =  $request->input('project_id');
      $collaborator_id = $request->input('collaborator_id');
      $project = Project::find($project_id);
      $project->collaborators()->attach($collaborator_id);
      $project->save();


        $partnershipMessage = PartnershipMessage::find($request->input('project_id'));
        $partnershipMessage->status = 1;
        $partnershipMessage->save();

              return redirect()->route('projectList');



    } else {


      $partnershipMessage = PartnershipMessage::find($request->input('project_id'));
      $partnershipMessage->status = 2;
      $partnershipMessage->save( );




      return redirect()->route('projectList');

          }

  }



}
