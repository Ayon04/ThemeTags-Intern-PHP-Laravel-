<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        //$this->assertTrue(false);
        //$this->assertFalse(true);

        $response = $this->get("/");
        $response->assertStatus(200);
    }
}
