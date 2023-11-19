<!-- resources/views/livewire/add-comment.blade.php -->

<div>
    <h3>Komentar</h3>

    <div>
        <!-- Display existing comments -->
        {{-- @foreach ($comments as $comment)
            <div>{{ $comment->content }}</div>
        @endforeach --}}
    </div>

    <form wire:submit.prevent="addComment">
        <div>
            <textarea wire:model="content" rows="4" cols="50" placeholder="Add your comment here..."></textarea>
            @error('content')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Add Comment</button>
    </form>
</div>