<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class NewUnTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); //TODO: Change the autogenerated stub

        $this->user = new User();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
}