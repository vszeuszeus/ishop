<?php

namespace App\Http\Controllers\PA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('pa.personalData');
    }
}
