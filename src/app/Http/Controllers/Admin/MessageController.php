<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller
{
    public function index($id){
        $query = Message::where('type', $id);
        $query->update(['status' => 'read']);
        $messages = $query->get();
        return view('admin.message.index', compact('messages', 'id'));
    }
}
