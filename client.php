<?php

use App\EchoFormatter;
use App\PoemGenerator;
use App\RandomOrderer;

require 'vendor/autoload.php';

$number = $argv[1];

$generator = new PoemGenerator(new EchoFormatter(), new RandomOrderer());
$result = $generator->generate($number);
echo $result;
