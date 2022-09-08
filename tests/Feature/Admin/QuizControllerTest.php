<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class QuizControllerTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $response = $this->post('rout')
    }

    public function test_index(){
        $response = $this->get(route('quiz.index'));

        $response->assertStatus(200);
        $response->assertSeeText('List Quizzes');
    }

    public function test_create(){
        $response = $this->get(route('quiz.create'));

        $response->assertStatus(200);
        $response->assertSeeText('Title');
        $response->assertSeeText('Duration');
        $response->assertSeeText('Limit');
    }
}
