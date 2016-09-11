<?php
namespace Jmondi\Guts\Tests;

use Jmondi\Guts\FancyClass;

class FancyClassTest extends \PHPUnit_Framework_TestCase
{
    const SOMETHING = 'string-something';

    public function setUp()
    {
        set_time_limit(1);
    }

    public function testGetSomething()
    {
        $fancyClass = new FancyClass(self::SOMETHING);

        $this->assertSame(
            self::SOMETHING,
            $fancyClass->getSomething()
        );
    }
}
