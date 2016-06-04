<?php

class Ohce
{
    /**
     * @var string
     */
    private $userName;

    /**
     * @var Console
     */
    private $console;

    /**
     * @param string $userName
     * @param Console $console
     */
    public function __construct($userName, $console)
    {
        $this->userName = $userName;
        $this->console = $console;
    }

    public function run()
    {
        $this->console->output('¡Buenas días Pedro!');
        $this->console->read('hola');
        $this->console->output('aloh');
    }
}
