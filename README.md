# Sistem Diagnosa Penyakit

Ini adalah implementasi sistem pakar diagnosa penyakit pada mulut dan gigi dengan menggunakan metode Certainty Factor. Program ini kami buat untuk memenuhi Tugas Akhir dari Mata Kuliah Pemrograman Berorientasi Objek.

![App Screenshot](https://github.com/meinhere/sistem_pakar/blob/main/public/dist/img/screenshot/dashboard.png?raw=true)

## Tech Stack

**Client:** [ruangAdmin](https://github.com/indrijunanda/RuangAdmin), Bootstrap, Jquery, filePond

**Server:** PHP 8.x, Laravel 8.x

## Dependencies

-   [Laravel Breeze](https://github.com/laravel/breeze)
-   [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
-   [spatie/laravel-activitylog](https://github.com/spatie/laravel-activitylog)
-   [akaunting/laravel-setting](https://github.com/akaunting/laravel-setting)
-   [Laravel Modules](https://nwidart.com/laravel-modules/v1)

## Installation

```sh
git clone https://github.com/meinhere/sistem_pakar
cd sistem_pakar
composer install
cp .env.example .env <-- edit db config
php artisan install
```

### Sample data

Membuat banyak hasil diagnosa untuk contoh (faker)

```sh
php artisan generate:diagnosa <total>
```

Argument `<total>` bersifat opsional

## Admin credentials

-   **Username:** admin
-   **Password:** admin123

## User credentials

-   **Username:** user
-   **Password:** user123

## Hasil Diagnosa

![diagnosa](https://github.com/meinhere/sistem_pakar/blob/main/public/dist/img/screenshot/diagnosa.png?raw=true)

## Running Server

To run server, run the following command

```
php artisan serve
```
