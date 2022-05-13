<?php 


function listarUsuario(){
    
    require_once('model/bd/usuario.php');

    $dados = selectAllUsuarios();

    if(!empty($dados))
        return $dados;
    else 
        return false;
}


function inserirUsuario($dadosUsuario){


    // //Validação para ver se o usuario e a senha estao corretas
    // $_SESSION["idusuario"] = $dadosUsuario["id"];
    // $_SESSION["nome"] = $dadosUsuario["nome"];
    // $_SESSION["senha"] = $dadosUsuario["senha"];
    // header("location: cms.php");


    //validação para ver se o objeto está vazio 
    if(!empty ($dadosUsuario)){
            
        //validacao para ver se a caixa está vazia
        if (!empty($dadosContato['txtNome']) && !empty($dadosContato['txtLogin']) && !empty($dadosContato['txtSenha'])) {
           
            $arrayDados = array (
            "nome"    => $dadosUsuario['txtNome'],
            "login"   => $dadosUsuario['txtLogin'],
            "senha"   => $dadosUsuario['txtSenha']
           
            );
     
     
    //import do arquivo para manipular o BD
    require_once ('model/bd/usuario.php');

    //chama a função que fará o insert do banco
    if(insertUsuario($arrayDados))
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


?>