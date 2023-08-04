<?php

namespace Tests\Feature;

use App\Models\Question;
use App\Models\QuestionComment;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class QuestionCommentTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_komentar_di_pertanyaan(): void
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

        $question = Question::create([
            'question_text' => 'Postingan pertama',
            'user_id' => $user->id,
        ]);
        
        $question_comment = QuestionComment::create([
            'comment_text' => 'Komentar wee',
            'question_id' => $question->id,
            'user_id' => $user->id,
        ]);
        $this->assertDatabaseHas('question_comments', [
            'id' => $question_comment->id
        ]);

        $question_comment1 = QuestionComment::create([
            'comment_text' => 'Komentar xii',
            'question_id' => $question->id,
            'user_id' => $user->id,
            'parent_id' => $question_comment->id,
        ]);
        $this->assertDatabaseHas('question_comments', [
            'parent_id' => $question_comment1->parent_id
        ]);
    }
}
