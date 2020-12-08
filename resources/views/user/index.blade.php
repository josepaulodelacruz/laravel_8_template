@extends('layouts.app')

@section('content')
    <div class="flex-col flex justify-center items-center  py-4">
        <div class="w-6/12 p-4">
            <h1 class="-text-2xl font-bold">{{ $user->name }}</h1>
            <span>
                {{ $user->posts()->count() }} posted
                {{ $user->receivedLikes()->count() }} {{ \Illuminate\Support\Str::plural('like', $user->receivedLikes()->count()) }}
            </span>
        </div>
        <div class="p-6 bg-white rounded-lg w-6/12">
            @if($posts->count())
                @foreach($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                {{ $posts->links() }}
            @else
                <p>No Posts</p>
            @endif
        </div>
    </div>
@endsection
