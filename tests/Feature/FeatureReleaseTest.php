<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FeatureReleaseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_user_gets_new_feature(): void
    {
        $response = $this->get('/random');
        //dd($response);
        $response->assertContent('new');

        $response->assertStatus(200);
    }
}
