<?php

namespace App\Http\Livewire\User\Comment;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostComment;

class AddComment extends Component
{
    public $postId;
    public $content;

    public function mount($postId)
    {
        $this->postId = $postId;
    }

    public function render()
    {
        $post = Post::findOrFail($this->postId);
        $comments = $post->comments;

        return view('livewire.user.comment.add-comment', compact('post', 'comments'));
    }

    public function addComment()
    {
        $this->validate([
            'content' => 'required|string',
        ]);

        PostComment::create([
            'post_id' => $this->postId,
            'comment_text' => $this->content,
        ]);

        $this->content = ''; // Clear the comment input after adding

        // Optionally, you can add a success message here using Laravel's session.
        // Example: session()->flash('message', 'Comment added successfully.');
    }
}