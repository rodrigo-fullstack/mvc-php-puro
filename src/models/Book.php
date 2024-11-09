<?php

declare(strict_types=1);

namespace Rodrigo\MvcPhpPuro\Models;

class Book{
    //Armazena a conexão com o BD
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    //Exibindo todos os livros...
    public function getAllBooks(){

        //Executa consultas a partir do BD no model
        $this->db->query('SELECT * from book');

        $this->db->execute();

        //É mal utilizar o método results pois está baseado no fetchAll, é melhor criar um único método que vai possuir um for para percorrer os registros evitando problemas de desempenho.
        return $this->db->results();
    }

    //Retornando livro pelo Id
    public function getBookById(int $id){

        //Cuidado com queries erradas...
        $this->db->query( "SELECT * FROM book WHERE id = :id" );

        // Evitando SQL Injection pelo bind
        $this->db->bind(':id', $id);

        return $this->db->result();
    }

    public function deleteById(int $id){

        //Cuidado com queries erradas...
        $this->db->query( "DELETE FROM book WHERE id = :id" );

        // Evitando SQL Injection pelo bind
        $this->db->bind(':id', $id);

        $this->db->execute();
    }
}