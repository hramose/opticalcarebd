<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;
use App\Note;
class NotesController extends Controller
{
    public function notes()
    {
        $notes = User::find(1)->notes;
        return view('admin.notes',compact('notes'));
    }
    public function addNote(Request $request)
    {
        $userId = Sentinel::getUser()->id;       
        $note = new Note;
        $note ->user_id = $userId;
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
        return 'Note Added';

    }
}
