# Requirements — Sistem Antrian

## Tujuan
Menyediakan alur antrian loket berbasis web: ambil nomor, pantau antrean, dan panggil nomor.

## Aktor
- Petugas loket / operator panggilan
- Pengunjung / pelanggan (ambil nomor)

## Kebutuhan fungsional (FR)
- FR-01 Ambil nomor antrian baru
- FR-02 Tampilkan nomor antrian saat ini dan selanjutnya
- FR-03 Panggil / update status antrian
- FR-04 Dashboard ringkasan antrian
- FR-05 API/endpoint pendukung jumlah, sisa, dan daftar antrian
- FR-06 Aset audio/UI untuk pengalaman panggilan

## Kebutuhan non-fungsional (NFR)
- NFR-01 Respons cepat untuk update status antrian
- NFR-02 Berjalan di browser modern
- NFR-03 Cocok untuk layar loket / monitor panggilan

## Batasan & asumsi
- Satu lokasi/loket sederhana (bukan multi-cabang kompleks)
- Tidak mensyaratkan hardware ticket printer khusus
- Demo portfolio; integrasi hardware opsional di proyek klien

## Stack
- Laravel 11, MySQL, HTML/CSS/JS
