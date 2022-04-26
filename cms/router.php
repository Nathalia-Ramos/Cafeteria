<?php

$action = (string) null;
$component = (string) null; 


if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'POST') {

    switch ($component){
        
         case 'CATEGORIAS';
 

  require_once('cms/controller/controllerCategoria.php');
  

if ($action == 'INSERIR')
{
        if(isset($_POST) && !empty($_POST)){

        }


  
    
    $resposta = inserirCategoria($_POST);


     //valida o tipo de dado que a controller retorna
     if (is_bool($resposta)) //se for booleano
     {
         //verificar se o retorno foi verdadeiro  
         if ($resposta)
             echo ("<script> 
                     alert('Registro inserido com sucesso!');
                     window.location.href = 'cms.php'; 
                 </script>"); // essa funcao retorna a página inicial apos a execucao
     } elseif (is_array($resposta))

         echo ("<script> 
                 alert('" . $resposta['message'] . "');
                 window.history.back(); 
             </script>");

        }  
     }

   
}

?>