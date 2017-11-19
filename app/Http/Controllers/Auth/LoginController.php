<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'login';
    }

    protected function redirectTo()
    {
        foreach(Auth::user()->roles()->get() as $role)
        {
            switch($role->translate)
            {
                case 'superadmin':
                    return $this->redirectTo = route('products');
                    break;
                case 'admin':
                    return $this->redirectTo = route('products');
                    break;
                case 'moderator':
                    return $this->redirectTo = route('products');
                    break;
                case 'member':
                    return $this->redirectTo = route('orderHistory');
                    break;
                default :
                    return $this->redirectTo = route('bladavasd');
            }
        }
    }


}
