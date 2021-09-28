<?php

namespace App;

interface Orderer
{
    public function order(array $data): array;
}
