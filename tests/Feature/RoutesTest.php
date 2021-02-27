<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertFileIsReadable;

class RoutesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    use RefreshDatabase;
    
    public function testRouteHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('welcome');
    }
    public function testRouteCourses()
    {
        $response = $this->get('/courses');

        $response->assertStatus(500)
            ->assertViewIs('courses');
    }
}
