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
                    return $this->redirectTo(route('products'));
                    break;
                case 'admin':
                    return $this->redirectTo(route('products'));
                    break;
                case 'moderator':
                    return $this->redirectTo(route('products'));
                    break;
                case 'member':
                    return $this->redirectTo(route('orderHistory'));
                    break;
                default:
                    return $this->redirectTo(route('asdasd'));
                    break;
            }
        }
    }
}
