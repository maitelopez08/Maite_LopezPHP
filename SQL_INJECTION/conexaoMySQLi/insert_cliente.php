<?php
//Inclui o arquivo de conexao com o banco de dados
require_once "conexao.php";

//Estabelece conexão
$conexao = conectadb();

//Definição dos valores para inseção 
$nome = "Maite López";
$endereco = "Rua Tomazzi Muraro, Casa 2";
$telefone = "(47) 991537194";
$email = "maitealejandra.lopez@gmail.com";

//Prepara a consulta SQL usando 'prepare()' para evitar SQL Injection
$stmt = $conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?,?,?,?)");

//Associa os parâmetros aos valores da consulta
$stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

//Executa a inserção
if ($stmt->execute()){
    echo "Cliente adicionado com sucesso!";
}else{
    echo "Erro ao aicionar cliente: ". $stmt->error;
}

//Fecha a consulta e a conexão com o bnco de dados
$stmt->close();
$conexao->close();
?>