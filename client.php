<?php

use App\EchoFormatter;
use App\PoemGenerator;
use App\RandomOrderer;

require 'vendor/autoload.php';

$number = $argv[1];

$generator = new PoemGenerator();

// $generator = new PoemGenerator(
//     formatter: new EchoFormatter(),
// );
// $generator = new PoemGenerator(
//     orderer: new RandomOrderer(),
// );
// $generator = new PoemGenerator(
//     formatter: new EchoFormatter(),
//     orderer: new RandomOrderer(),
// );

$result = $generator->generate($number);
echo $result;
