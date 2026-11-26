<?php

declare(strict_types=1);

require_once __DIR__ . '/Notifikasi.php';

class WhatsApp implements Notifikasi
{
    public function __construct(
        public string $nomorHp,
    ) {
    }

    public function kirim(string $pesan): string
    {
        return "[WhatsApp -> {$this->nomorHp}]: {$pesan}";
    }
}
