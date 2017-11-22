<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
