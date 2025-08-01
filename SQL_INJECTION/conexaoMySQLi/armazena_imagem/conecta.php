<?php
//DEFINIR AS CREDENCIAIS DA CONEXÃO
$endereco = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "armazena_imagem";

//CRIANDO A CONEXAO USANDO MYSQLI
$conexao = new mysqli($endereco,$usuario,$senha,$bancoDados);

//VERIFICAR SE HOUVE ERRO DE CONEXÃO
if($conexao->connect_error){
    die("Falha na conexão". $conexao->connect_error);
}
?>