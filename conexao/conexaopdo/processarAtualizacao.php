<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processar Deleção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/stylemenu.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <address>
  <center>
        Maite López | Estudante | Técnico em Desenvolvimento de Sistemas
  </center>
    </address>
</body>
</html>


<?php
require 'conexao.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conexao = conectarBanco();

    $id = filter_var($_POST["id_cliente"],FILTER_SANITIZE_NUMBER_INT);
    $nome = htmlspecialchars(trim($_POST["nome"]));
    $endereco = htmlspecialchars(trim($_POST["endereco"]));
    $telefone = htmlspecialchars(trim($_POST["telefone"]));
    $email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);

    if(!$id ||!$email){
        die("Ero: ID inválido ou e-mail incorreto.");
    }

    $sql= "UPDATE cliente SET nome = :nome, endereco = :endereco, telefone = :telefone, email = :email WHERE id_cliente = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id",$id,PDO::PARAM_INT);
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":endereco",$endereco);
    $stmt->bindParam(":telefone",$telefone);
    $stmt->bindParam(":email",$email);

    try{
        $stmt->execute();
        echo '<div class="d-flex justify-content-center mt-3">
                <div class="alert alert-success text-center w-50">
                  Cliente atualizado com sucesso!
                </div>
            </div>';
    }catch(PDOException $e){
        error_log("Erro ao atualizar cliente: ".$e->getMessage());
        echo '<div class="d-flex justify-content-center mt-3">
                <div class="alert alert-danger text-center w-50">
                    Erro ao atualizar cliente.
                </div>
            </div>';

    }
}


?>


