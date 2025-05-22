@extends('layouts.app')

@section('content')
<div class="relative bg-gray-900">
    <!-- Hero section -->
    <div class="relative pt-6 pb-16 sm:pb-24">
        <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24">
            <div class="text-center">
                <h1 class="text-4xl tracking-tight font-extrabold text-gray-100 sm:text-5xl md:text-6xl">
                    <span class="block">Welcome to</span>
                    <span class="block text-indigo-400">Cinema Experience</span>
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-gray-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Discover the magic of cinema. Watch the latest movies, share your reviews, and join our community of movie enthusiasts.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    @guest
                        <div class="rounded-md shadow">
                            <a href="{{ route('login') }}" class="btn-primary">
                                Login
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="{{ route('register') }}" class="btn-secondary">
                                Register
                            </a>
                        </div>
                    @else
                        <div class="rounded-md shadow">
                            <a href="{{ route('dashboard') }}" class="btn-primary">
                                Go to Dashboard
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </main>
    </div>

    <!-- Featured Movies Section -->
    <div class="bg-gray-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Now Showing
                </h2>
                <p class="mt-4 text-lg text-gray-300">
                    Check out our latest movie releases
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Movie Card 1 -->
                    <div class="card hover-card bg-gray-700">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="https://via.placeholder.com/600x400" alt="Movie" class="object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-white">Movie Title 1</h3>
                            <p class="mt-2 text-gray-300">Action, Adventure</p>
                            <a href="#" class="mt-4 inline-flex items-center text-indigo-400 hover:text-indigo-300">
                                Book Now →
                            </a>
                        </div>
                    </div>

                    <!-- Movie Card 2 -->
                    <div class="card hover-card bg-gray-700">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="https://via.placeholder.com/600x400" alt="Movie" class="object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-white">Movie Title 2</h3>
                            <p class="mt-2 text-gray-300">Drama, Thriller</p>
                            <a href="#" class="mt-4 inline-flex items-center text-indigo-400 hover:text-indigo-300">
                                Book Now →
                            </a>
                        </div>
                    </div>

                    <!-- Movie Card 3 -->
                    <div class="card hover-card bg-gray-700">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="https://via.placeholder.com/600x400" alt="Movie" class="object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold text-white">Movie Title 3</h3>
                            <p class="mt-2 text-gray-300">Comedy, Romance</p>
                            <a href="#" class="mt-4 inline-flex items-center text-indigo-400 hover:text-indigo-300">
                                Book Now →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    Why Choose Us?
                </h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-300 lg:mx-auto">
                    Experience cinema like never before
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="card hover-card bg-gray-800 p-6">
                        <div class="text-indigo-400 text-2xl mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-white">Premium Seating</h3>
                        <p class="mt-2 text-gray-300">Comfortable reclining seats for the ultimate movie experience.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="card hover-card bg-gray-800 p-6">
                        <div class="text-indigo-400 text-2xl mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-white">Dolby Atmos Sound</h3>
                        <p class="mt-2 text-gray-300">Immersive audio that puts you in the heart of the action.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="card hover-card bg-gray-800 p-6">
                        <div class="text-indigo-400 text-2xl mb-4">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-medium text-white">Easy Booking</h3>
                        <p class="mt-2 text-gray-300">Book your tickets online in just a few clicks.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 