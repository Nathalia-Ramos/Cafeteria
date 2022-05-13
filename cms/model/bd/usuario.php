<?php

require_once('conexaoMySql.php');

$statusReposta = (bool) false;


function selectAllUsuarios(){

    $conexao = conexaoMysql();

    $sql = 'select * from tblusuario order by idusuario desc';

    $result = mysqli_query($conexao, $sql);

    if ($result) {
        $cont = 0;

        while ($rsDados = mysqli_fetch_assoc($result)) {

            $arrayDados[$cont] = array(
                "nome"    => $rsDados['nome'],
                "login"   => $rsDados['login'],
                "senha"   => $rsDados['senha']
            );
          
        }

        fecharConexaoMySql($conexao);
    
        return $arrayDados;
    }

}

function insertUsuario($dadosUsuario){

    $conexao = conexaoMysql();

    $sql = "insert into tblusuario
                (nome,
                 login,
                 senha)
            values
            ('" . $dadosUsuario['nome'] . "',
            ('" . $dadosUsuario['login'] . "',
             '" . $dadosUsuario['senha'] . "');";


      //valida para ver se o script está correto
      if(mysqli_query($conexao, $sql)) {
        if(mysqli_affected_rows($conexao))

        $statusResposta = true;
  
    }else 
        fecharConexaoMysql ($conexao);
        
        return $statusResposta;
     
    

}














?>