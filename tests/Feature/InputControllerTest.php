<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputControllerTest extends TestCase
{
    public function testInput()
    {
        $this->get('/input/hello?name=Aldizar')
            ->assertSeeText('Hello Aldizar');

        $this->post('/input/hello', [
            'name' => 'Aldizar'
        ])->assertSeeText('Hello Aldizar');
    }

    public function testInputNested()
    {
        $this->post('/input/hello/first', [
            "name" => [
                "first" => "Aldizar",
                "last" => "Ilham"
            ]
        ])->assertSeeText("Hello Aldizar");
    }

    public function testInputAll()
    {
        $this->post('/input/hello/input', [
            "name" => [
                "first" => "Aldizar",
                "last" => "Ilham"
            ]
        ])->assertSeeText("name")->assertSeeText("first")
            ->assertSeeText("last")->assertSeeText("Aldizar")
            ->assertSeeText("Ilham");
    }

    public function testInputArray()
    {
        $this->post('/input/hello/array', [
            "products" => [
                [
                    "name" => "Apple Mac Book Pro",
                    "price" => 30000000
                ],
                [
                    "name" => "Samsung Galaxy S10",
                    "price" => 15000000
                ]
            ]
        ])->assertSeeText("Apple Mac Book Pro")
            ->assertSeeText("Samsung Galaxy S10");
    }

    public function testInputType()
    {
        $this->post('/input/type', [
            'name' => 'Lulu',
            'married' => 'true',
            'birth_date' => '1990-10-10'
        ])->assertSeeText('Lulu')->assertSeeText("true")->assertSeeText("1990-10-10");
    }

    public function testFilterOnly()
    {
        $this->post('/input/filter/only', [
            "name" => [
                "first" => "Aldizar",
                "middle" => "Muhamad",
                "last" => "Ilham"
            ]
        ])->assertSeeText("Aldizar")->assertSeeText("Ilham")
            ->assertDontSeeText("Muhamad");
    }

    public function testFilterExcept()
    {
        $this->post('/input/filter/except', [
            "username" => "Ilham",
            "password" => "rahasia",
            "admin" => "true"
        ])->assertSeeText("Ilham")->assertSeeText("rahasia")
            ->assertDontSeeText("admin");
    }


    public function testFilterMerge()
    {
        $this->post('/input/filter/merge', [
            "username" => "khannedy",
            "password" => "rahasia",
            "admin" => "true"
        ])->assertSeeText("khannedy")->assertSeeText("rahasia")
            ->assertSeeText("admin")->assertSeeText("false");
    }

}
