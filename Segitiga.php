<?php

declare(strict_types=1);

require_once __DIR__ . '/BangunDatar.php';

class Segitiga extends BangunDatar
{
    public function __construct(
        public float $alas,
        public float $tinggi,
        public float $sisiA = 0.0,
        public float $sisiB = 0.0,
        public float $sisiC = 0.0,
    ) {
        if ($this->sisiA === 0.0 && $this->sisiB === 0.0 && $this->sisiC === 0.0) {
            $miring = sqrt(($this->alas ** 2) + ($this->tinggi ** 2));
            $this->sisiA = $this->alas;
            $this->sisiB = $this->tinggi;
            $this->sisiC = $miring;
        }
    }

    public function luas(): float
    {
        return round(0.5 * $this->alas * $this->tinggi, 2);
    }

    public function keliling(): float
    {
        return round($this->sisiA + $this->sisiB + $this->sisiC, 2);
    }
}
