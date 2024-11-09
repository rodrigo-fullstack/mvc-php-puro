<?php

//Conectando com Autoload do PHP
require $_SERVER['DOCUMENT_ROOT'] .'\\backend-php\\mvc-php-vanilla\\loja-livros\\vendor\\autoload.php' ;

use Rodrigo\MvcPhpPuro\Config\Config;
use Rodrigo\MvcPhpPuro\models\Database;

$db = new Database();

//Exibe quantidade de registros
// $db->query("SELECT * FROM book");
// echo $db->execute();

// Dados exemplo;
// $isbn = '0111';
// $title = 'Novo Título';
// $author = 'Novo Autor';
// $date_added = date("dmYhms");// Tratar depois erro de data
// Não pode especificar data no PHP pois o SQL está fazendo isso automaticamente com a definição do atributo date_added;

// Modelo de inserção no BD
// $db->query("INSERT INTO `book` (`isbn`, `title`, `author`)
// VALUES (:isbn, :title, :author)");

//Vincula os parâmetros a seus devidos valores
//Isso é importante para evitar SQL Injection, ou seja, está totalmente relacionado com a segurança da informação
// $db->bind(':isbn', $isbn);
// $db->bind(':title', $title);
// $db->bind(':author', $author);

// echo $db->execute();

//Uso do PDO: p rimeiro prepara (query), depois vincula (bind) por último executa