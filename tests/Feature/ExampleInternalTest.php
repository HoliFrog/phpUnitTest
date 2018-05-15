<?php

namespace Tests\Feature;

use Tests\InternalTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleInternalTest extends InternalTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
