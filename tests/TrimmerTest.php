<?php

namespace Boatrace\Ninja\Tests;

use Boatrace\Ninja\Trimmer;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @author shimomo
 */
class TrimmerTest extends PHPUnitTestCase
{
    /**
     * @return void
     */
    public function testTrim(): void
    {
        $this->assertNull(Trimmer::trim());
        $this->assertNull(Trimmer::trim(null));
        $this->assertSame('競艇', Trimmer::trim(' 競艇 '));
    }

    /**
     * @return void
     */
    public function testLtrim(): void
    {
        $this->assertNull(Trimmer::ltrim());
        $this->assertNull(Trimmer::ltrim(null));
        $this->assertSame('競艇 ', Trimmer::ltrim(' 競艇 '));
    }

    /**
     * @return void
     */
    public function testRtrim(): void
    {
        $this->assertNull(Trimmer::rtrim());
        $this->assertNull(Trimmer::rtrim(null));
        $this->assertSame(' 競艇', Trimmer::rtrim(' 競艇 '));
    }
}
