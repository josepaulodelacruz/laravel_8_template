@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center py-4">
        <div class="p-6 bg-white rounded-lg w-6/12">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="my-4">
                    <label for="name" class="sr-only">name</label>
                    <input type="text"
                           name="name"
                           placeholder="Name"
                           value="{{ old('name') }}"
                           class="w-full p-6 rounded-lg bg-gray-300 border @error('name') border-red-500 @enderror">
                    @error('name')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="username" class="sr-only">username</label>
                    <input type="text"
                           name="username"
                           placeholder="Username"
                           value="{{ old('username') }}"
                           class="w-full p-6 rounded-lg bg-gray-300 border @error('name') border-red-500 @enderror">
                    @error('username')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text"
                           name="email"
                           placeholder="Email"
                           value="{{ old('email') }}"
                           class="w-full p-6 rounded-lg bg-gray-300 border @error('email') border-red-500 @enderror">
                    @error('email')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="email" class="sr-only">password</label>
                    <input type="password"
                           name="password"
                           placeholder="Password"
                           class="w-full p-6 rounded-lg bg-gray-300 border" >
                    @error('password')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="my-4">
                    <label for="email" class="sr-only">Password Confirmation</label>
                    <input type="password"
                           name="password_confirmation"
                           id="password_confirmation"
                           placeholder="Password Confirmation"
                           class="w-full p-6 rounded-lg bg-gray-300 border" >
                </div>
                <button type="submit" class="w-full bg-blue-500 rounded-lg p-6 text-white font-bold">Register</button>
            </form>
        </div>
    </div>
@endsection
