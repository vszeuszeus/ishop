<?php

namespace App\Http\Controllers\PA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    public function support()
    {
        return view('pa.support');
    }
}
