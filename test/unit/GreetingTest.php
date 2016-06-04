<?php


class GreetingTest extends PHPUnit_Framework_TestCase
{
    public function test_greet_user_on_the_morning()
    {
        $userName = 'Pedro';

        $greeting = new GreetingForUser($userName);
        $result = $greeting->greets();

        $this->assertEquals('¡Buenas días Pedro!', $result);
    }
}
