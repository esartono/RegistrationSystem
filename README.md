## Aplikasi Pendaftaran

Aplikasi untuk pendaftaran dengan verifikasi dokumen

## Instalasi

### With GIT
Clone git repository

Menggunakan Git SSH
```
git clone git@github.com:esartono/RegistrationSystem.git
```

atau dengan HTTPS
```
git clone https://github.com/esartono/RegistrationSystem.git
```

```
cd RegistrationSystem
```

Update composer 
```
composer update
```

Copy ```.env.example``` menjadi ```.env```

Untuk Unix
```
cp .env.example .env
```
Untuk Windows
```
copy .env.example .env
```

Kemudian jalankan perintah
```
php artisan key:generate
```

Edit file ```.env``` sesuai dengan settingan database dan kemudian jalankan perintah
```
php artisan migrate --seed
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
