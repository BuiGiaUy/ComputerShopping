<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $name = "Admin";
        return view('admin/homepage')->with('name', $name);
    }
}
