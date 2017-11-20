<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.products.categories');
    }

    public function create()
    {
        return view('admin.categories.create');
    }
}
