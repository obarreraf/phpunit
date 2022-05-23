<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function textEmail()
    {
        $result = validate_email('i@admin.com');
        $this ->assertTrue($result);

        $result = validate_email('i@@admin.com');
        $this ->assertFalse($result);
    }
}
