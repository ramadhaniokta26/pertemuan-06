<?php

declare(strict_types=1);

require_once __DIR__ . '/Notifikasi.php';

class Email implements Notifikasi
{
    public function __construct(
        public string $alamatEmail,
    ) {
    }

    public function kirim(string $pesan): string
    {
        return "[Email -> {$this->alamatEmail}]: {$pesan}";
    }
}
