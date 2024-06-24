<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title">{{ $post->user->name }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <p class="text-muted">{{ $post->created_at->diffForHumans() }}</p>

        <button class="btn btn-secondary btn-sm" onclick="document.getElementById('reply-form-{{ $post->id }}').style.display='block'">Reply</button>

        <div id="reply-form-{{ $post->id }}" style="display: none;" class="mt-2">
            <form action="/posts/store" method="POST">
                @csrf
                <input type="hidden" name="parent_id" value="{{ $post->id }}">
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="2" placeholder="Reply to this post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Reply</button>
            </form>
        </div>
    </div>
</div>

@if($post->replies)
    <div class="ml-4">
        @foreach($post->replies as $reply)
            @include('posts.partials.post', ['post' => $reply])
        @endforeach
    </div>
@endif
