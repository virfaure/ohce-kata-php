<?php

namespace test\acceptance;

use Ohce;
use Console;

class AcceptanceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function ohce_running_during_the_morning()
    {
        $userName = 'Pedro';

        $console = $this->getMockBuilder(Console::class)
            ->disableOriginalConstructor()
            ->getMock();

        $console->expects($this->exactly(2))
            ->method('output')
            ->willReturnOnConsecutiveCalls(
                '¡Buenas días Pedro!',
                'aloh'
            );

        $console->expects($this->once())
            ->method('read')
            ->willReturn('hola');

        $ohce = new Ohce($userName, $console);
        $ohce->run();
    }
}
