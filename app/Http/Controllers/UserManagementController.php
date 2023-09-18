<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $title = "User Management";
        return view('user.index', compact('title'));
    }
}
