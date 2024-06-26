<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ViewTest extends TestCase
{
    
    public function testView()
    {
        $this->get('/hello')
            ->assertSeeText('hello aldizar');

        $this->get('/hello-again')
            ->assertSeeText('hello aldizar');
    }

    public function testNested()
    {
        $this->get('/hello-world')
            ->assertSeeText('world aldizar');
    }

    public function testTamplate()
    {
        $this->view('hello', ['name' => 'aldizar'])
            ->assertSeeText('hello aldizar');
    }
}
