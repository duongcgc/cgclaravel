<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // create view
    public function create() {
        return view('users.create');
    }
}
