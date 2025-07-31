<?php
require 'conexao.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("SELECT * FROM cliente");
$stmt->execute();
$clientes = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clientes</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="CSS/stylelistar.css">
  <link rel="stylesheet" href="CSS/stylemenu.css">
</head>

<body>
  <?php include 'menu.php'; ?>
  <div class="container mt-5">
        <div class="quadro-branco">
          <h2 class="text-center mb-4">Lista de Clientes</h2>

        <div class="table-responsive">
          <table class="table table-striped table-bordered shadow-sm">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($clientes as $cliente): ?>
                <tr>
                  <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
                  <td><?= htmlspecialchars($cliente["nome"]) ?></td>
                  <td><?= htmlspecialchars($cliente["endereco"]) ?></td>
                  <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
                  <td><?= htmlspecialchars($cliente["email"]) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
     </div>
    </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  <address>
  <center>
        Maite López | Estudante | Técnico em Desenvolvimento de Sistemas
  </center>
    </address>
</body>
</html>
