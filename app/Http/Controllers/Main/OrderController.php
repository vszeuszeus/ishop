<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        return view();
    }

    public function checkOrderView()
    {
        return view('mains.orders.checkOrder');
    }
}
