<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use App\Models\Role;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_pembuatan_pengguna(): void
    {
        $role = Role::make([
            'id' => 1,
            'role_name' => 'Admin'
        ]);
        $role->timestamps = false;
        $role->save();

        $user = User::create([
            'email' => 'john@example.com',
            'password' => 'John Doe',
            'role_id' => 1,
        ]);
        $this->assertDatabaseHas('users', [
            'email' => $user->email
        ]);
    }
}
