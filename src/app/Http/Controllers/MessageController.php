<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Messages::paginate(10);

        return view('message/index', compact('messages'));
    }

    public function create(Request $request)
    {
        $message = new Messages();
        $message->title = $request->title;
        $message->save();

        return redirect("/message/{$message->id}");
    }

    public function show($id)
    {
        $message = Messages::findOrFail($id);

        return view('message/show', compact('message'));
    }

    public function delete($id)
    {
        $message = Messages::findOrFail($id);
        $message->delete();

        return redirect('message');
    }
}
