<?php

namespace App;

interface Formatter
{
    public function format(array $lines): string;
}
