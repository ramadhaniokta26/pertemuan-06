# Lab Sheet Pertemuan 6: Abstraction dan Polymorphism

- **Nama:** Okta Ramadhani
- **NIM:** 24.24.032095

## Analisis: Kapan Memilih `abstract class` vs `interface`

1. **Pilih `abstract class` ketika:**
   - Class-class turunan memiliki hubungan **"is-a" (adalah bagian dari jenis yang sama)** dan berbagi identitas domain yang jelas, seperti `Lingkaran`, `Persegi`, `PersegiPanjang`, dan `Segitiga` yang semuanya adalah `BangunDatar`.
   - Ada properti, *constructor*, atau implementasi method konkret bersama yang bisa diwariskan agar tidak terjadi duplikasi kode.
   - Sebuah class hanya mewarisi satu *parent class* utama (`extends`).

2. **Pilih `interface` ketika:**
   - Anda ingin menetapkan **kontrak perilaku ("can-do" / kemampuan)** yang harus dimiliki oleh class berbeda yang tidak harus satu keluarga pewarisan, seperti `Email`, `WhatsApp`, dan `SMS` yang sama-sama memiliki kemampuan `kirim(string $pesan): string`.
   - Class perlu mengimplementasikan lebih dari satu kontrak sekaligus (`implements Notifikasi, Loggable`).
   - Fokusnya pada polimorfisme berbasis perilaku (seperti pada fungsi `kirimSemua(array $notifikasi, string $pesan)`).
