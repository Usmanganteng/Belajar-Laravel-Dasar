<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RoutingTest extends TestCase
{

    public function testGet()
    {
        $this->get('/mai')
            ->assertStatus(200)
            ->assertSeeText('Hello Muhamad aldizar ilham');
    }

    public function testRedirect()
    {
        $this->get('/youtube')
            ->assertRedirect('/mai');
    }

    public function testFallback()
    {
        $this->get('/tidakada')
            ->assertSeeText('404 by aldizar');

        $this->get('/tidakadalagi')
            ->assertSeeText('404 by aldizar');

        $this->get('/ups')
            ->assertSeeText('404 by aldizar');
    }

    public function testRouteParameter()
    {
        $this->get('/products/1')
            ->assertSeeText('product 1');

        $this->get('/products/2')
            ->assertSeeText('product 2');

        $this->get('/products/1/items/XXX')
            ->assertSeeText("product 1, item XXX");

        $this->get('/products/2/items/YYY')
            ->assertSeeText("product 2, item YYY");
    }

    public function testRouteParameterRegex()
    {
        $this->get('/categories/100')
            ->assertSeeText('Category 100');

        $this->get('/categories/eko')
            ->assertSeeText('404 by aldizar');
    }

    public function testRouteParameterOptional()
    {
        $this->get('/users/aldizar')
            ->assertSeeText('User aldizar');

        $this->get('/users/')
            ->assertSeeText('User 404');
    }

    public function testRouteConflict()
    {
        $this->get('/conflict/budi')
            ->assertSeeText("Conflict budi");

        $this->get('/conflict/aldizar')
            ->assertSeeText("Conflict Muhamad Aldizar Ilham");
    }

    public function testNamedRoute()
    {
        $this->get('/produk/12345')
            ->assertSeeText('Link http://localhost/products/12345');

        $this->get('/produk-redirect/12345')
            ->assertRedirect('/products/12345');
    }
}
