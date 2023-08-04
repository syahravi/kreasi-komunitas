<?php

namespace Tests\Feature;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AnswerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_menjawab_pertanyaan(): void
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
            'question_text' => 'Apa itu manusia?',
            'user_id' => $user->id,
        ]);
        $this->assertDatabaseHas('questions', [
            'id' => $question->id
        ]);
        
        $answer = Answer::create([
            'answer_text' => 'Manusia itu makhluk sosial.',
            'user_id' => $user->id,
            'question_id' => $question->id,
        ]);
        $this->assertDatabaseHas('answers', [
            'id' => $answer->id,
            'user_id' => $answer->user_id
        ]);
    }
}