<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_pembuatan_kiriman(): void
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
        $this->assertDatabaseHas('posts', [
            'id' => $post->id
        ]);
    }
}
