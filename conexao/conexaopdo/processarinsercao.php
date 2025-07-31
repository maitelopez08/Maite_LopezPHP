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
</body>
</html>

<?php
        require_once 'conexao.php';

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $conexao = conectarBanco();

            $sql = "INSERT INTO cliente (nome, endereco, telefone, email)
            VALUES (:nome, :endereco, :telefone, :email)";

            $stmt = $conexao->prepare($sql);
            $stmt->bindParam(":nome",$_POST["nome"]);
            $stmt->bindParam(":endereco",$_POST["endereco"]);
            $stmt->bindParam(":telefone",$_POST["telefone"]);
            $stmt->bindParam(":email",$_POST["email"]);
            try{
                $stmt->execute();
                echo '<div class="d-flex justify-content-center mt-3">
                        <div class="alert alert-success text-center w-50">
                            Cliente cadastrado com sucesso!
                        </div>
                      </div>';
            }catch(PDOException $e){
                error_log("Erro ao inserir cliente:".$e->getMessage());
                echo '<div class="d-flex justify-content-center mt-3">
                        <div class="alert alert-danger text-center w-50">
                            Erro ao cadastrar cliente.
                        </div>
                      </div>';
            }
            
        }

        ?>



