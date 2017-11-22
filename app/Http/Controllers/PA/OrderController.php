<?php

namespace App\Http\Controllers\PA;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orderHistory(){
        return view('pa.orderHistory');
    }
}
