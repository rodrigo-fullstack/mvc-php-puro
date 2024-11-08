<?php

//Conectando com Autoload do PHP
require $_SERVER['DOCUMENT_ROOT'] .'\\backend-php\\mvc-php-vanilla\\loja-livros\\vendor\\autoload.php' ;

use Rodrigo\MvcPhpPuro\Config\Config;
use Rodrigo\MvcPhpPuro\models\Database;

$db = new Database();

$db->query('SELECT * FROM book');