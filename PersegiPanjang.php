<?php

declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class PersegiPanjang extends BangunDatar
{
    public function __construct(
        public float $p,
        public float $l,
    ) {
    }

    public function luas(): float
    {
        return round($this->p * $this->l, 2);
    }

    public function keliling(): float
    {
        return round(2 * ($this->p + $this->l), 2);
    }
}
