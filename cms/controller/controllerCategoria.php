<?php


function inserirCategoria($dadosCategoria){
    
    //validação para ver se o objeto está vazio 
        if(!empty ($dadosCategoria)){
            
            //validacao para ver se a caixa está vazia
            if(!empty($dadosCategoria['txtCategoria'])) {
               
                $arrayDados = array (
                "graos" => $dadosCategoria['txtCategoria'],
                "kit" => $dadosCategoria['txtCategoria']
               
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
        if (deleteCategoria($id))
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

function buscarCategoria($id){
    
    if($id  =! 0 && !empty($id) && is_numeric($id)){
        
        require_once ('model/bd/categoria.php');

        $dados = selectByIdCategoria($id);

       
         //Valida se existem dados para serem desenvolvidos
         if (!empty($dados)) {
            return $dados;
        } else {
            return false;
        }
    } else
        return array(
            'idErro' => 4,
            'message' => 'Não é possível buscar um registro sem informar um Id válido'
        );

    
}


function atualizarCategoria($dadosCategoria, $id){

    $_SESSION['dadosCategoria'] = $dadosCategoria;

    //valida para ver se o campo está vazio
    if(!empty($dadosCategoria)){
         
            //validacao para ver se a caixa está vazia
        if(!empty($dadosCategoria['txtCategoria'])) {
               
           $arrayDados = array(
              "id"   => $id,
             "graos" => $dadosCategoria['txtCategoria'],
             "kit"  => $dadosCategoria ['txtCategoria']
         
             );
               
              //Validação para garantir que o id seja válido
            if(!empty($id) && $id != 0 && is_numeric($id)){

                $arrayDados = array (
                    "id" => $id,
                    "graos" => $dadosCategoria['graos'],
                    "kit"   => $dadosCategoria ['kit']
                );

                require_once ('modelo/bd/categoria.php');

                if(updateCategoria($arrayDados))
                      return true;         
                else
                      return array('idErro' => 1, 
                                    'message' => 'Não foi possível atualizar os dados no banco de dados');

                }else {
                       return array(
                          'idErro' => 4,
                          'message' => 'Não é possível atualizar um registro sem informar um Id válido');
                    }
                }else
                        return array(
                            'idErro' => 2,
                            'message' => 'Existem campos obrigatórios que não foram preenchidos'
                            );
    }

}
?>