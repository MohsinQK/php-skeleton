<?php

declare(strict_types=1);

namespace MohsinKhan\Testing;

use PHPUnit\Framework\TestCase;

class TestingTest extends TestCase
{
    /** @var Testing */
    protected $testing;

    protected function setUp(): void
    {
        $this->testing = new Testing();
    }

    public function testIsInstanceOfTesting(): void
    {
        $actual = $this->testing;
        $this->assertInstanceOf(Testing::class, $actual);
    }
}
