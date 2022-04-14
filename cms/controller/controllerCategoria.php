<?php

function inserirCategoria($dadosCategoria){
    
    //validação para ver se o objeto está vazio 
        if(!empty ($dadosCategoria)){
            
            //validacao para ver se a caixa está vazia
            if(!empty($dadosCategoria['txtCategoria'])) {
               
                $arrayDados = array (
                "categoria" => $dadosCategorias['txtCategoria']
                );

        //import do arquivo para manipular o BD
        require_once ('model/bd/categoria.php');

        //chama a função que fará o insert do banco
        if(insertCategoria($arrayDados))
            return true;
        else
            return array ('idErro' => 1, 
                              'message' => 'Não foi possível inserir os dados no banco de dados');

        
        }else 
            return array(
                'idErro' => 2,
                'message' => 'Existem campos obrigatórios que não foram preenchidos'
        );
     }
}


function excluirCategoria(){
    
     require_once('model/bd/categoria.php');


     
    // Validação para verificar se id contem um numero valido
    if ($id != 0 && !empty($id) && is_numeric($id)) {

        // Import do arquivo de contato
        require_once('model/bd/contato.php');

        // Chama a função da model e valida se o retorno foi verdadeiro ou falso
        if (deleteContato($id))
            return true;
        else
            return array(
                'idErro' => 3,
                'message' => 'O banco de dados não pode excluir o registro.'
            );
    } else
        return array(
            'idErro' => 4,
            'message' => 'Não é possível excluir um registro sem informar um Id válido'
        );
}

function listarCategoria(){

    require_once('model/bd/categoria.php');

    $dados = selectAllCategorias();

    if (!empty($dados))
         return $dados;
    else
        return false;



}



?>