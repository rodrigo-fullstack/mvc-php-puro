<?php

namespace Rodrigo\MvcPhpPuro\Core;

//Gerencia a forma com a qual o usuário utiliza a aplicação
class Controller{

    //Carregar modelo do BD

    //Realiza a conexão com o BD através da instância do modelo, no caso Book.php
    /**
     * Resumo de loadModel
     * @param mixed $model (deve ser nesse caso Book)
     * @return object
     */
    protected function loadModel ($model){
        //Realiza a importação
        require_once '../Models/' . $model . '.php';

        //Instancia o objeto Book
        return new $model;
    }

    //Renderiza a parte visual (view)
    /**
     * Resumo de renderView
     * @param mixed $viewPath (caminho do arquivo da view)
     * @param mixed $data (dados que virão acompanhados da view)
     * @param mixed $title (título opcional)
     * @return void
     */
    protected function renderView($viewPath, $data = [], $title = "Book Store"){

        //Divide o array em variáveis
        extract($data);

        //Inclui o layout básico
        require_once '../Views/layout.php';
    }
}