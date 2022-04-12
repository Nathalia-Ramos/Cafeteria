<?php

function listarContato(){

    require_once('model/bd/contato.php');

    $dados = selectAllContatos();

    if (!empty($dados))
         return $dados;
    else
        return false;

      
}


function inserirCategorias($dadosCategorias){   
    
       //import do arquivo de modelagem para manipular o BD
         require_once('model/bd/contato.php');
    
      //chama a funcao que fara o insert no banco de dados (essa funcao esta na model)
         if (insertCategoria($arrayDados)){  
             return true;
         }else
             return array
                        ('idErro' => 1, 
                        'message' => 'Não foi possível inserir os dados no banco de dados'
                    );
          
            return array
                   ('idErro' => 2,
                  'message' => 'Existem campos obrigatórios que não foram preenchidos'
                );
        
          
    

}

?>