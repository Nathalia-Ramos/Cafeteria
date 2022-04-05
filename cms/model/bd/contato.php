<?php 

/*********************************************************************
 * Objetivo: arquivo responsavel por manipular os dados dentro do BD(insert, select, update, delete)
 * Autor: Nathalia
 * Data: 05/04/2022
 * Versão: 1.0
 *********************************************************************/


 //import do arquivo do BD

 require_once('conexaoMySql.php');




function selectAllContatos()
{
    //abre a conexao com o banco de dados
    $conexao = conexaoMysql();

    //script para listar todos os dados do banco de dados 
    $sql = 'select * from tblcontatos5 order by idcontato desc';

    //executa o script sql no BD e guarda o retorno dos dados se houver
    $result = mysqli_query($conexao, $sql); //quando mandados um script para o banco do tipo insert, delete, etc.
    // o script nao tera retorno, ao contrario do select que precisa retornal algo

    //valida se o BD retorna registros
    if ($result) {

        $cont = 0;
        //nesta repeticao estamos convertendo os dados do banco de daos do BD em um array ($rsDados),
        // alem de o proprio while conseguir gerenciar a quantidade de vezes que dveria ser feita a repeticao
        while ($rsDados = mysqli_fetch_assoc($result)) {
            //cria um array com os dados do banco de dados 
            $arrayDados[$cont] = array(
                "nome"       =>   $rsDados['nome'],
                "email"      =>   $rsDados['email'],
                "mensagem"        =>   $rsDados['mensagem']
            );
            $cont++;
        }

        // Solicita o fechamento da conexão com o BD. Ação obrigatória (abrir e fechar) 
        fecharConexaoMySql($conexao);

        return $arrayDados;
    }
}

?>