<?php


class Phrase
{
    private $content;

    /**
     * @param string $content
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function reverse()
    {
        return strrev($this->content);
    }
}
