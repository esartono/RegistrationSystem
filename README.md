## Aplikasi Pendaftaran

Aplikasi untuk pendaftaran dengan verifikasi dokumen

## Instalasi

### With GIT
Clone git repository

With Git SSH
```
git clone git@github.com:FlorientR/laravel-gentelella.git
```

Or with HTTPS
```
git clone https://github.com/FlorientR/laravel-gentelella.git
```

Go to the project folder 
```
cd laravel-gentelella
```

Update composer 
```
composer update
```

## Step 2
Copy ```.env.example``` file to ```.env```

For Unix
```
cp .env.example .env
```
For Windows
```
copy .env.example .env
```

And then, run this commands

```
php artisan key:generate
```

Configure your ```.env``` file and run :
```
php artisan migrate --seed
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
