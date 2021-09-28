<?php

namespace App;

class EchoPoemGenerator extends PoemGenerator
{
    protected function parts(int $number): array
    {
        return array_reduce(
            parent::parts($number),
            fn ($output, $line) => [...$output, "{$line}, {$line}"],
            []
        );
    }
}
