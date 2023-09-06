<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

##
### Install

```bash
git clone https://github.com/velixs-id/laravel-mysql-upload.git
```
Copy File .env.example menjadi .env

```bash
# terminal command
cp .env.example .env
```
Buka file .env dan edit local ke public. jangan lupa konfigurasi databasenya juga
```bash
#before
FILESYSTEM_DISK=local

#after
FILESYSTEM_DISK=public
```

```bash
composer install

php artisan key:generate

php artisan migrate

php artisan storage:link

php artisan serve
```
