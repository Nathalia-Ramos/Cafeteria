<?php 

    /*********************************************************************
 * Objetivo: arquivo para criar a conexão com o banco de dados MySQL
 * Autor: Nathalia
 * Data: 05/04/2022
 * Versão: 1.0
 *********************************************************************/


    // Constantes para estabelecer a conexao com o banco de dados (local do banco, Ususário, Senha e database)
    const SERVER = 'localhost';
    const USER = 'root';
    const PASSWORD = 'bcd127';
    const DATABASE = 'dbcontatos';

    $resultado = conexaoMysql();

    //Abre a conexao com o banco de dados

    function conexaoMysql(); 
    {
        //Se a conexao for estabelida com o BD, vamos ter um array de dados sobre a conexao
            $conexao = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);

        //Validacao para verificar se a conexao foi realizada com sucesso 
        if ($conexao)
            return $conexao;
        else
            return false; 


}       
        //fechar a conexao

        function fecharConexaoMySql(){
            mysqli_close($conexao);
        }


?>