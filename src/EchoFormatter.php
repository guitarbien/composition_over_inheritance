<?php

namespace App;

class EchoFormatter implements Formatter
{
    public function format(array $lines): string
    {
        $formattedLines = array_reduce(
            $lines,
            fn ($output, $line) => [...$output, "{$line}, {$line}"],
            []
        );

        return implode(PHP_EOL . str_pad(' ', 8), $formattedLines);
    }
}
