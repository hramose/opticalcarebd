<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use App\Note;
use Validator;
use Response;

class NotesController extends Controller
{
    public function notes()
    {
        $notes = User::find(1)->notes;
        return view('admin.notes',compact('notes'));
    }
    public function addNote(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $userId = Sentinel::getUser()->id;       
            $note = new Note;
            $note ->user_id = $userId;
            $note->title = $request->title;
            $note->content = $request->content;
            $note->save();
            return response()->json($note);            
        }

    }
    public function updateNote(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required'
        ]);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {     
            $note = Note::find($request->id);
            $note->title = $request->title;
            $note->content = $request->content;
            $note->save();
            return response()->json($note);            
        }
    }
    public function deleteNote(Request $request)
    {
        Note::where('id',$request->id)->delete();
        return "Delete done";
    }
}
