<?php

//Conectando com Autoload do PHP
require $_SERVER['DOCUMENT_ROOT'] .'\\backend-php\\mvc-php-vanilla\\loja-livros\\vendor\\autoload.php' ;

use Rodrigo\MvcPhpPuro\Config\Config;
use Rodrigo\MvcPhpPuro\models\Database;

$db = new Database();

//Exibe quantidade de registros
// $db->query("SELECT * FROM book");
// echo $db->execute();


$isbn = '0111';
$title = 'Novo Título';
$author = 'Novo Autor';
$date_added = date("dmY");


// Modelo de inserção no BD
// $db->query("INSERT INTO `book` (`isbn`, `title`, `author`, `date_added`)
// VALUES ('$isbn', '$title', '$author', '$date_added')");
// echo $db->execute();