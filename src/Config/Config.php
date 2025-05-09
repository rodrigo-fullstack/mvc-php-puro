<?php
declare(strict_types=1);

namespace Rodrigo\MvcPhpPuro\Config;

//Configurações Básicas do Projeto
class Config{
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_NAME = 'bookdb';
    const DB_PORT = '3306';
    const BASE_URL = 'http://localhost/backend-php/mvc-php-vanilla/loja-livros/public/';
}
//Credenciais do BD
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', '');
// define('DB_NAME', 'bookdb');
// define('DB_PORT', '3306');

// //Base URL é o ponto de entrada para seu projeto
// define(
//     'BASE_URL',
// 'http://localhost/BackEndPHP/mvc-php-vanilla/loja-livros/public');