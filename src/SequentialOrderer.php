<?php

namespace App;

class SequentialOrderer implements Orderer
{
    public function order(array $data): array
    {
        return $data;
    }
}
