<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Comandos

### Criação do projeto
```
composer create-project laravel/laravel meu-site
```

### Instalação e atualização das dependências
```
composer install
composer update
```

### Geração de uma nova chave da aplicação
```
php artisan key:generate
```

### Migrations
```
php artisan migrate          // cria as tabelas
php artisan migrate:refresh  // recria as tabelas alteradas
php artisan migrate:fresh    // recria todas as tabelas
```

### Seeders
```
php artisan make:seeder UsersSeeder  // cria um seeder
php artisan db:seed                  // executa o seeder
```