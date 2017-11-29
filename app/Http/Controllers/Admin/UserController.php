<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function managers()
    {
        $managers = User::managers()
            ->withProblemTicketsCount()
            ->withEndedOrdersCount()
            ->with('orders')
            ->get();

        return view('admin.users.managers', [
            'managers' => $managers
        ]);

    }
}
