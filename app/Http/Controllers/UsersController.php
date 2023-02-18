<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function users()
    {
        return view('admin.user.user');
    }
}
