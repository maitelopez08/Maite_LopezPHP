<?php
//Habilita relatório de detalhado de erros no MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
/*
*Função para conectar ao banco de dados
*Retorna um objeto de conexão MySQLi ou interrompe o script em caso de erro
*/
function conectadb(){
    //configuração do banco de dados
    $endereco = "localhost"; //Endereço do servidor MySQL
    $usuario = "root";       //Nome de usuário do banco de dados
    $senha = "";             //Senha de usuário do banco de dados
    $banco = "empresa";      //Nome do banco de dados

    try{
        //Criação da conexão
        $con = new mysqli($endereco, $usuario, $senha, $banco);

        //Definição de conjunto de caracteres para evitar problemas de acentuação
        $con->set_charset("utf8mb4");    //Retorna o objeto da conexão
        return $con;
    } catch (Exception $e){
        //Exibe uma mensagem de erro e encerra e script
        die("Erro na conexão:".$e->getMessage());
    }
}

?>