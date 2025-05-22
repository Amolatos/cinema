@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold mb-4">Welcome, {{ Auth::user()->name }}!</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-blue-100 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">My Bookings</h3>
                        <p class="text-gray-600 mb-4">View and manage your movie bookings</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800">View Bookings →</a>
                    </div>

                    <div class="bg-yellow-100 p-4 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Now Showing</h3>
                        <p class="text-gray-600 mb-4">Browse currently showing movies</p>
                        <a href="#" class="text-yellow-600 hover:text-yellow-800">View Movies →</a>
                    </div>
                </div>

                <div class="mt-8">
                    <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                    <div class="bg-gray-50 p-4 rounded-lg">
                        <p class="text-gray-600">No recent activity to show.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 