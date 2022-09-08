<?php

namespace Tests\Feature\admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestClassroomController extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_classroom()
    {
        $response = $this->get(route('classroom.index'));
        $response->assertStatus(200);
        $response->assertSeeText('classroom');
    }


    public function test_create_classroom_required(){
        $params=[
            'name'=>null,
            'desc'=>"jcbd jlcad",
            'image'=>"image.jpg",
        ];
        $response = $this->post(route('classroom.store'),$params);
        $response
        ->assertStatus(302)
        ->assertSessionHasErrors('name');
    }

}
