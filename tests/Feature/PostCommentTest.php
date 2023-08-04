<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostCommentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_komentar_di_kiriman(): void
    {
        $role = Role::make([
            'id' => 1,
            'role_name' => 'user'
        ]);
        $role->timestamps = false;
        $role->save();

        $user = User::create([
            'email' => 'cc@ravi.com',
            'password' => 'John Doe',
            'role_id' => 1,
        ]);

        $post = Post::create([
            'post_text' => 'Postingan pertama',
            'user_id' => $user->id,
        ]);
        
        $post_comment = PostComment::create([
            'comment_text' => 'Komentar wee',
            'post_id' => $post->id,
            'user_id' => $user->id,
        ]);
        $this->assertDatabaseHas('post_comments', [
            'id' => $post_comment->id
        ]);

        $post_comment1 = PostComment::create([
            'comment_text' => 'Komentar xii',
            'post_id' => $post->id,
            'user_id' => $user->id,
            'parent_id' => $post_comment->id,
        ]);
        $this->assertDatabaseHas('post_comments', [
            'parent_id' => $post_comment1->parent_id
        ]);
    }
}
