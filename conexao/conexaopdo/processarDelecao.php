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

    $id = filter_var($_POST["id"],FILTER_SANITIZE_NUMBER_INT);

    if(!$id){
        die("Erro: ID inválido.");
    }

    $sql = "DELETE FROM cliente WHERE id_cliente = :id";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id",$id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        echo '<div class="d-flex justify-content-center mt-3">
                <div class="alert alert-success text-center w-50">
                    Cliente excluído com sucesso!
                </div>
            </div>';
    } catch (PDOException $e) {
        error_log("Erro ao excluir cliente: ".$e->getMessage());
        echo '<div class="d-flex justify-content-center mt-3">
                  <div class="alert alert-danger text-center w-50">
                    Erro ao excluir cliente.
                  </div>
            </div>';
    }
}
?>


