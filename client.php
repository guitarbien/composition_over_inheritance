<?php

use App\PoemGenerator;

require 'vendor/autoload.php';

$number = $argv[1];

$generator = new PoemGenerator;
$result = $generator->generate($number);
echo $result;
