<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Config;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function dump_database_connection()
    {
        dump(Config::get('database.default'));
        dump(Config::get('database.connections.mysql'));
    }
}
