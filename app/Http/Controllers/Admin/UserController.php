<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function managers()
    {
        return view('admin.users.managers', User::managers()->with('tickets', 'orders')->get());
    }





}
