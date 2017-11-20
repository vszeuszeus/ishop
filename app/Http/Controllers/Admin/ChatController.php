<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('admin.chats.chats');
    }

    public function create()
    {
        return view('admin.chats.create');
    }

    public function store()
    {
        return 'eshe ne otrabotano';
    }
}
