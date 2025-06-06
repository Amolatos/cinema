<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        if (Auth::user()->isAdmin()) {
            return view('admin.dashboard');
        }
        return view('user.dashboard');
    }
} 