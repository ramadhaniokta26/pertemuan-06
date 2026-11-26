<?php

declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Persegi extends BangunDatar
{
    public function __construct(
        public float $sisi,
    ) {
    }

    public function luas(): float
    {
        return round($this->sisi ** 2, 2);
    }

    public function keliling(): float
    {
        return round(4 * $this->sisi, 2);
    }
}
