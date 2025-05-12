@extends('layout')

@section('content')
    <div class="w-full min-h-screen flex items-center justify-center px-6 lg:px-24 py-12">
        <div
            class="w-full max-w-md bg-white/40 backdrop-blur-lg rounded-xl p-8 space-y-6 shadow-sm transition-all duration-300">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-900">Sign In to Your Account</h2>
                <p class="text-sm text-gray-500 mt-2">Welcome back to Chic Lighting!</p>
            </div>

            @if ($errors->any())
                <div class="bg-red-100 text-red-600 p-3 rounded-lg text-sm">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Email or Username</label>
                    <input id="username" name="username" type="text" value="{{ old('username') }}" required autofocus
                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white/60 backdrop-blur-sm shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="mt-1 block w-full rounded-md border border-gray-300 bg-white/60 backdrop-blur-sm shadow-sm focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox"
                            class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-sm">
                            <a href="{{ route('password.request') }}" class="text-indigo-600 hover:text-indigo-500">Forgot
                                password?</a>
                        </div>
                    @endif
                </div>

                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none transition">
                        Sign In
                    </button>
                </div>

                <div class="text-center text-sm text-gray-500">
                    or sign in with
                </div>

                <!-- social login -->
                <div class="flex space-x-4">
                    <button type="button"
                        class="w-1/2 flex items-center justify-center gap-2 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </button>
                    <button type="button"
                        class="w-1/2 flex items-center justify-center gap-2 bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition">
                        <i class="fab fa-google"></i>
                        Google
                    </button>
                </div>

                <!-- register prompt -->
                <div class="text-center text-sm text-gray-600 pt-4 border-t border-gray-200">
                    Don’t have an account?
                    <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-medium ml-1">
                        Sign Up
                    </a>
                </div>

            </form>
        </div>
    </div>
@endsection