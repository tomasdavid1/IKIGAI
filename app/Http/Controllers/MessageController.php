<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
]);
  }




  public function viewMessage($value='')
  {
    $myProjects =   DB::table('messages')
                        ->select('messages.*')
                        ->where('user_id', '=', Auth::User()->id)
                        //->where() aca deberia espexificar que muestre solo el ultimo de cada usuario
                        ->get();

    return view('myMessages')->with('myMessages', $myMessages);
  }

}
