<?php
require_once '../config/config.php';

class Database{
    //Definindo propriedades privadas com valores do BD capturados de config.php
    private $host = DB_HOST;
    private $user = DB_USER;
    private $passwd = DB_PASS;
    private $dbname = DB_NAME;
    private $dbport = DB_PORT;

    private $dbh; //Manipulador do BD
    private $stmt; //Script SQL
    private $error; //Mensagem de Erro

    //Construtores inicializam as instâncias da classe: Iniciar conexão com BD
    public function __construct(){

        //Data Source Name, nome que será fornecido no PDO
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};port={$this->dbport}";
        var_dump($dsn);
    }   
}

$db = new Database();

