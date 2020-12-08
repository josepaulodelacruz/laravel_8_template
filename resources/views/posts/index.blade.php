@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center py-4">
        <div class="p-6 bg-white rounded-lg w-6/12">
            @auth
            <form action="{{ route('posts') }}" method="post">
                @csrf
                <textarea type="text"
                          cols="10"
                          rows="4"
                          placeholder="Posts"
                          name="body"
                          class="w-full bg-gray-300 p-4 @error('body') border-red-500 @enderror rounded-lg border" >
                </textarea>
                @error('body')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit" class="bg-blue-500 p-4 rounded-lg text-white w-full font-bold">Post</button>
            </form>
            @endauth
            <div class="my-2">
                @if($posts->count())
                    @foreach($posts as $post)
                        <x-post :post="$post"/>
                    @endforeach

                    {{ $posts->links() }}

                @else
                    <p>No posts</p>
                @endif

            </div>
        </div>
    </div>
@endsection
