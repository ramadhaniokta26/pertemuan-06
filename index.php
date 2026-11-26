<?php

declare(strict_types=1);

require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/PersegiPanjang.php';
require_once __DIR__ . '/Segitiga.php';
require_once __DIR__ . '/Email.php';
require_once __DIR__ . '/WhatsApp.php';
require_once __DIR__ . '/SMS.php';

// Nama: Okta Ramadhani | NIM: 24.24.032095

/**
 * @param Notifikasi[] $notifikasi
 * @return string[]
 */
function kirimSemua(array $notifikasi, string $pesan): array
{
    $hasil = [];
    foreach ($notifikasi as $kanal) {
        if ($kanal instanceof Notifikasi) {
            $hasil[] = $kanal->kirim($pesan);
        }
    }

    return $hasil;
}

echo "=== BANGUN DATAR (ABSTRACTION & POLYMORPHISM) ===\n";
/** @var BangunDatar[] $bangunList */
$bangunList = [
    new Lingkaran(7),
    new Persegi(5),
    new PersegiPanjang(3, 4),
    new Segitiga(6, 4, 6, 4, 7.21),
];

foreach ($bangunList as $bangun) {
    echo get_class($bangun) . " -> Luas: {$bangun->luas()}, Keliling: {$bangun->keliling()}\n";
}

echo "\n=== NOTIFIKASI (INTERFACE & POLYMORPHISM) ===\n";
$channels = [
    new Email('okta@example.com'),
    new WhatsApp('081234567890'),
    new SMS('081234567890'),
];

$hasilKirim = kirimSemua($channels, 'Pengingat jadwal kuliah PBO.');
foreach ($hasilKirim as $log) {
    echo $log . "\n";
}
