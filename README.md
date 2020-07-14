<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

API e Web Client feitos com PHP/Laravel

- Instruções para Execução 

1 - Possuir apache server e o mysql instalados localmente, além do composer para as dependências;

2 - executar os seguintes comandos no projeto:

    composer install - para instalar todas as dependências 

    php artisan key:generate - para gerar a chave de acesso 
    
    php artisan serve - para subir o servidor local 

3 - Executar as Migrations ou SQL (na raiz da aplicação) para criar as tabelas;

Database name: controlevendas

***Front-end acoplado ao back-end através da Template Engine 'Blade' *** 

Endpoints da API podem ser testados no Postman ou Insomnia 

http://127.0.0.1:8000/api/vendedor && http://127.0.0.1:8000/api/vendas

Acesso ao client no navegador pela url http://127.0.0.1:8000

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
