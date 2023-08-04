<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Space;

class SpaceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_pembuatan_ruang(): void
    {
        $space = Space::create([
            'space_name' => 'john@example.com',
            'space_description' => 'John Doe',
        ]);
        $this->assertDatabaseHas('spaces', [
            'space_name' => $space->space_name
        ]);
    }
}
