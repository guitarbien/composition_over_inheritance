<?php
namespace App;

class PoemGenerator
{
    public function generate(int $number): string
    {
        return "This is {$this->phrase($number)}.";
    }

    protected function phrase(int $number): string
    {
        $parts = array_slice($this->data(), -$number, $number);
        return implode(PHP_EOL . str_pad(' ', 8), $parts);
    }

    private function data(): array
    {
        return [
            'the horse and the hound and the horn that belonged to', 'the farmer sowing his corn that kept',
            'the rooster that crowed in the morn that woke',
            'the priest all shaven and shorn that married',
            'the man all tattered and torn that kissed',
            'the maiden all forlorn that milked',
            'the cow with the crumpled horn that tossed',
            'the dog that worried',
            'the cat that killed',
            'the rat that ate',
            'the malt that lay in',
            'the house that Jack built',
        ];
    }
}
