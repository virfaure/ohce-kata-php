<?php


class Ohce
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var Console
     */
    private $console;

    /**
     * @var Clock
     */
    private $clock;

    /**
     * @param string $username
     * @param Console $console
     * @param Clock $clock
     */
    public function __construct($username, $console, $clock)
    {
        $this->username = $username;
        $this->console = $console;
        $this->clock = $clock;
    }

    public function run()
    {
        $hour = $this->clock->hour();

        if ($hour >=6 && $hour <=12) {
            $this->console->output('¡Buenas días Pedro!');
        }

        $this->console->read('hola');
        $this->console->output('aloh');

        $this->console->read('oto');
        $this->console->output('oto');
        $this->console->output('¡Bonita palabra!');

        $this->console->read('stop');
        $this->console->output('pots');

        $this->console->read('Stop!');
        $this->console->output('Adios Pedro');
    }
}
