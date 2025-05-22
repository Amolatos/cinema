<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        // Get counts for dashboard stats
        $stats = [
            'total_users' => User::count(),
            'total_movies' => 0, // You can add movie count here when you have the Movie model
            'total_bookings' => 0, // You can add booking count here when you have the Booking model
        ];

        return view('admin.dashboard', compact('stats'));
    }
} 