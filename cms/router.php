<?php

$action = (string) null;
$component = (string) null; 


if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'POST') {

    $component = strtoupper($_GET['component']);
    $action = strtoupper($_GET['action']);

    switch ($component){
        
         case 'CATEGORIAS';

  require_once('controller/controllerCategoria.php');
  

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

        }elseif ($action == 'BUSCAR'){
            //recebe o id do registro que deve ser editado,
            //e foi enviado pela url no link da imagem do editar que foi acionado na index
            $idcategoria = $_GET['id'];

            //chama a função 
            $dados = buscarCategoria($idcategoria);

            //ativa a utilização da variavel da sessao no servidor
            session_start();

            $_SESSION['dadoscategoria'] = $dados;

            require_once ('cms.php');

        }elseif ($action == 'EDITAR'){

        $idcategoria = $_GET['id'];

        //chama a função para editar 
        $resposta = atualizarCategoria($_POST, $idcategoria);

        //valida o tipo de dado que a controller retora

        if(is_bool($resposta))
        {

            //verifica se o retorno foi verdadeiro
            if ($resposta)
            echo ("<script> 
                    alert('Registro editado com sucesso!');
                    window.location.href = 'cms.php'; 
                </script>"); // essa funcao retorna a página inicial apos a execucao
            }elseif (is_array($resposta))

            echo ("<script> 
                    alert('" . $resposta['message'] . "');
                    window.history.back(); 
                </script>");
      }
            break;
    }
}

?>