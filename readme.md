# Kupas

*Kunjungan lapas*

## A. Cara Install Source Code

1. Download Repository pada link https://github.com/arpaulustindi/kupas/archive/refs/heads/master.zip
2. Hasil Download akan menjadi kupas-master.zip
3. Ekstrak hasil download ini menjadi folder (biasanya akan menjadi kupas-master atau kupas) tergantung zip arcive yang digunakan
4. Pindahkan folder tersebut ke lokasi project
5. Masuk ke dalam folder kemudian Open In Command Prompt
6. Dalam Command Prompt ketikan kode `code .` untuk membuka VSCode pada folder aktif
7. Pada VSCode, rename file **.env.pakai** jadi **.env**
8. Buka terminal pada VSCode, ketikan `composer install` untuk install paket
9. Setelah selesai, masih pada terminal VSCode ketikan `php artisan key:generate` untuk generate key aplikasi
10. Masih pada terminal VSCode ketikan `npm run build` untuk membuild aplikasi

## B. Cara Buat Database dan Migrasi Database

1. Pada Mysql (PhpMyAdmin atau Aplikasi Manajemen database), buat database baru dengan nama **kupas**
2. Kembali pada terminal VSCode ketikan `php artisan migrate`

## C. Buat User Baru

1. Pada terminal VSCode ketikan `php artisan make:filament-user` kemudian masukan : 1. Nama, 2. Email, dan Password


## D. Menjalankan Aplikasi

1. Kembali ke command prompt seperti langkah A.5
2. Pada command prompt ketikan `php artisan serve`
