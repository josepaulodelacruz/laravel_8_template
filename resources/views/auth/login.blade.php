@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center py-4">
        <div class="p-6 bg-white rounded-lg w-6/12">
            @if(session('status'))
                <div class="p-4 text-white font-bold text-center rounded-lg bg-red-500 w-full">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="my-2">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text"
                           name="email"
                           placeholder="Email"
                           class="w-full p-6 rounded-lg bg-gray-300 border @error('email') border-red-500 @enderror">
                    @error('email')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="my-2">
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
                <div class="my-2">
                    <input type="checkbox" id="remember_me" name="remember_me">
                    <label for="remember_me">Remember Me</label>
                </div>
                <button type="submit" class="w-full bg-blue-500 rounded-lg p-6 text-white font-bold">Login</button>
            </form>
        </div>
    </div>
@endsection
