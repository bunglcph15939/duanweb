<?php

namespace Tests\Feature\Admin;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Tests\TestCase;

class TestLoginController extends TestCase
{
    private $user;


    // protected function setUp(): void
    // {
    //     parent::setUp();
    //     Artisan::call('db:seed', ['--class'=>'DatabaseSeeder']);
    //     //  Auth::guard('web')->loginUsingId(1);
    //     User::find(1);
    //     // Auth::login($this->user, true);
    // }


    public function test_postLogin_if_success()
    {
        $this->post(route('auth.processLogin'), [
            'email' => 'admin@example.com',
            'password' => '12345678',
        ])
        ->assertStatus(302)
        ->assertRedirect(route('frontend.home'));
        // ->assertSessionHas('cartalyst_sentinel');
    }

    public function test_register(){

    }
}
