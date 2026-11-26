<?php

declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Lingkaran extends BangunDatar
{
    public function __construct(
        public float $r,
    ) {
    }

    public function luas(): float
    {
        return round(pi() * ($this->r ** 2), 2);
    }

    public function keliling(): float
    {
        return round(2 * pi() * $this->r, 2);
    }
}
