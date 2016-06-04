<?php

class AcceptanceTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function ohce_running_during_the_morning()
    {
        $username = 'Pedro';

        $console = $this->getMockBuilder(Console::class)
            ->disableOriginalConstructor()
            ->getMock();

        $clock = $this->getMockBuilder(Clock::class)
            ->disableOriginalConstructor()
            ->getMock();

        $clock->expects($this->once())
            ->method('hour')
            ->willReturn(10);

        $console->expects($this->exactly(6))
            ->method('output')
            ->willReturnOnConsecutiveCalls([
                '¡Buenas días Pedro!',
                'aloh',
                'oto',
                '¡Bonita palabra!',
                'pots',
                'Adios Pedro'
            ]);

        $console->expects($this->exactly(4))
            ->method('read')
            ->withConsecutive(
                ['hola'],
                ['oto'],
                ['stop'],
                ['Stop!']
            );


        $ohce = new Ohce($username, $console, $clock);
        $ohce->run();
    }
}
