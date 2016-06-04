<?php


class GreetingForUser
{
    /**
     * @var string
     */
    private $userName;

    /**
     * @param string $userName
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    public function greets()
    {
        return '¡Buenas días '.$this->userName.'!';
    }
}
