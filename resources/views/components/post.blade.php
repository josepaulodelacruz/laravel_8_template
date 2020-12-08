@props(['post' => $post])
<div class="mb-4">
    <div class="flex items-center justify-between">
        <div>
            <a href="{{ route('post.show', $post->user) }}" class="font-bold">{{ $post->user->name }}</a>
            <span class="text-sm mx-2 text-gray-800">
            {{ $post->created_at->diffForHumans() }}
        </span>
        </div>
        @can('delete', $post)
            <form action="{{ route('post.delete', $post) }}" method="post" class="">
                @csrf
                @method('DELETE')
                <button class="text-red-500">delete</button>
            </form>
        @endcan
    </div>

    <p>{{ $post->body }}</p>

    <div class="flex items-center">
        @if(!$post->likedBy(auth()->user()))
            <form action="{{ route('post.like', $post) }}" method="post" class="mr-2">
                @csrf
                <button class="text-blue-500">Like</button>
            </form>
        @else
            <form action="{{ route('post.unlike', $post) }}" method="post" class="mr-2">
                @csrf
                @method('DELETE')
                <button class="text-blue-500">Unlike</button>
            </form>
        @endif
        <p class="text-sm">{{ $post->likes()->count() }} {{ \Illuminate\Support\Str::plural('like', $post->likes()->count()) }}</p>
    </div>
</div>
