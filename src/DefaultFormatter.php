<?php

namespace App;

class DefaultFormatter implements Formatter
{
    public function format(array $lines): string
    {
        return implode(PHP_EOL . str_pad(' ', 8), $lines);
    }
}
