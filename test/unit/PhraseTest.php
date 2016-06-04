<?php


class PhraseTest extends PHPUnit_Framework_TestCase
{
    public function test_phrase_is_reversed()
    {
        $input = 'hola';

        $phrase = new Phrase($input);
        $result = $phrase->reverse();

        $this->assertEquals('aloh', $result);
    }
}
