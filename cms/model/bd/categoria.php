<?php 
    
    //import do BD
    require_once('conexaoMySql.php');
    
 $statusReposta = (bool) false;

function insertCategoria($dadosCategoria){

    $conexao = conexaoMySql();

    //monta o script do BD      
    $sql = "insert into tblcategorias2
                (graos,
                 kit)
            values
           ('" . $dadosCategoria['graos'] . "',
            '" . $dadosCategoria['kit'] . "');";


    //valida para ver se o script está correto
    if(mysqli_query($conexao, $sql)) {
        if(mysqli_affected_rows($conexao))

        $statusResposta = true;
  
    }else 
        fecharConexaoMysql ($conexao);
        
        return $statusResposta;
    
    
    
                
}

function deleteCategoria($id){

    $conexao = conexaoMySql();

    //script para deletar um registro
    $sql = 'delete from tblcategorias2 where idcategoria = ' . $id; 

     // Valida se o script está correto, sem erro de sitaxe e o executa
     if (mysqli_query($conexao, $sql)) {
        // Valida se o BD teve sucesso na conexao do script
        if (mysqli_affected_rows($conexao))
            $statusResposta = true;
    }

    // Fecha a conexao com o BD
    fecharConexaoMySql($conexao);
    return $statusResposta;


}

function selectByIdCategoria($id){
    
}




function selectAllCategorias()
{

    //abre a conexao com o BD
    $conexao = conexaoMySql();

    //script para listar
    $sql = 'select * from tblcategorias2 order by idcategoria desc';
 

    $result = mysqli_query($conexao, $sql);

    if ($result) {
        $cont = 0;

        while ($rsDados = mysqli_fetch_assoc($result)) {

            $arrayDados[$cont] = array(
                "graos" => $rsDados['graos'],
                "kit"   => $rsDados['kit']
            );
            $cont++;
        }

        fecharConexaoMySql($conexao);
    
        return $arrayDados;
    }

}


function updateCategoria(){

    require_once('conexaoMySql');
    $conexao = conexaoMysql();

    $sql = "update tblcategorias2 set 
    graos  =    '" . $dadosCategoria['celular'] . "',
    kit    =    '" . $dadosCategoria['email'] . "'
    
    where idcontato = "  . $dadosCategoria['id']; 
}

?>