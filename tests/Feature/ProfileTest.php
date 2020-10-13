<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use DatabaseMigrations;

    public function testUserCanLogin()
    {
        $user = User::factory()->make();
        Sanctum::actingAs($user);
        // dd(auth()->user());
    }
}
