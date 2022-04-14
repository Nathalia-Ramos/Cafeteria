<?php 


/*****************************************************************************
 * Objetivo: Arquivo de rota para seguimentar as ações encaminhadas pela View
 *           (dados de um form, listagem de dados, ação de excluir ou atualizar)
 *            Esse arquivo será responsável por encaminhar as solicitações para 
 *            a controller  
 * 
 * Autor: Nathalia
 * Data: 12/04/2022
 * Versão: 1.0
 *******************************************************************************/

    $action = null;
    $compenent = null;

    //Validação para verifivar se a requisição é um POST de um formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET'){   

     //recebendo dados via url para saber quem está solicitando e qual ação será realizada
     $component = strtoupper($_GET['component']);
     $action = strtoupper($_GET['action']);


     switch ($compenent) {
         
        case 'CATEGORIAS';

        require_once('model/bd/controllerCategoria.php');

      
                //valida o tipo de dado que a controller retorna
                if (is_bool($resposta)) //se for booleano
                {
                    //verificar se o retorno foi verdadeiro
                    if ($resposta)
                        echo ("<script> 
                                alert('Registro inserido com sucesso!');
                                window.location.href = 'index.php'; 
                            </script>"); // essa funcao retorna a página inicial apos a execuca
                } elseif (is_array($resposta))

                    echo ("<script> 
                        alert('" . $resposta['message'] . "');
                        window.history.back(); 
                   </script>");
    
                 }elseif ($action == DELETAR){
                     $resposta = excluirCategoria($id);

                     if (is_bool($resposta)) {
                        if ($resposta) {
                            echo ("<script> 
                                    alert('Categoria excluído com sucesso!');
                                    window.location.href = 'cms.php'; 
                                </script>");
                        }
                    } elseif (is_array($resposta)) {
                        echo ("<script> 
                            alert('" . $resposta['message'] . "');
                            window.history.back(); 
                              </script>");
                    }  
                 }

    }














}

























?>