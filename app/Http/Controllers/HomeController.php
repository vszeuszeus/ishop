<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        foreach($request->user()->roles()->get() as $role)
        {
            switch($role->translate)
            {
                case 'superadmin':
                    return redirect()->route('products');
                    break;
                case 'admin':
                    return redirect()->route('products');
                    break;
                case 'moderator':
                    return redirect()->route('products');
                    break;
                case 'member':
                    return redirect()->route('orderHistory');
                    break;
                default:
                    return redirect()->route('mainPage');
                    break;
            }
        }
    }
}
