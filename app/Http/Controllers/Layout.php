<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Layout extends Controller
{
    //
    public function index()
    {
        return view('layout.home');
    }

    public function create()
    {
        return view('create_user');
    }

    public function list()
    {
        return view('list_users');
    }

    public function drivers()
    {
        return view('lists_drivers');
    }

    public function user()
    {
        return view('create-form-user');
    }
}