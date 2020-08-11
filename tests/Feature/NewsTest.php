<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);

        $response = $this->get('/news/films');
        $response->assertStatus(200);

        $response = $this->get('/news/sport');
        $response->assertStatus(200);

        $response = $this->get('/news/travel');
        $response->assertStatus(200);

        $response = $this->get('/news/science');
        $response->assertStatus(200);

        $response = $this->get('/news/technology');
        $response->assertStatus(200);
    }
}
