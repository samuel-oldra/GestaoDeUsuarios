<h1 align="center">
  Gestão de Usuários
</h1>
<p align="center">
  <a href="#tecnologias-e-práticas-utilizadas">Tecnologias e práticas utilizadas</a> •
  <a href="#funcionalidades">Funcionalidades</a> •
  <a href="#comandos">Comandos</a>
</p>

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
  </a>
</p>
<p align="center">
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tecnologias e práticas utilizadas
- PHP 8.1
- Laravel 9.x
- SQLite
- Arquitetura MVC

## Funcionalidades
- Autenticação (breeze)
- Gestão de Usuários
- Gestão de Comentários do Usuário

###

![alt text](https://raw.githubusercontent.com/samuel-oldra/GestaoDeUsuarios/main/README_IMGS/list_user.png)
![alt text](https://raw.githubusercontent.com/samuel-oldra/GestaoDeUsuarios/main/README_IMGS/create_user.png)
![alt text](https://raw.githubusercontent.com/samuel-oldra/GestaoDeUsuarios/main/README_IMGS/list_comment.png)
![alt text](https://raw.githubusercontent.com/samuel-oldra/GestaoDeUsuarios/main/README_IMGS/create_comment.png)

## Comandos

### Criação do projeto
```
composer create-project laravel/laravel meu-site
```

### Instalação e atualização das dependências
```
composer install
composer update
npm install
npm update
npm run dev
```

### Geração de uma nova chave da aplicação
```
php artisan key:generate
```

### Migrations
```
php artisan migrate                  // cria as tabelas
php artisan migrate:refresh          // recria as tabelas alteradas
php artisan migrate:fresh            // recria todas as tabelas
```

### Seeders
```
php artisan make:seeder UsersSeeder  // cria um seeder
php artisan db:seed                  // executa o seeder
```

### Controllers
```
php artisan make:controller UserController
```

### Requests
```
php artisan make:request StoreUpdateUserFormRequest
```
