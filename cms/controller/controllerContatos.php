<?php

function listarContato(){

    require_once('model/bd/contato.php');

    $dados = selectAllContatos();

    if (!empty($dados))
         return $dados;
    else
        return false;

      
}


?>