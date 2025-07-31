<?php
require_once 'conexao.php';
$conexao = conectarBanco();
$busca = $_GET['busca'] ?? '';

if (!$busca) {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Pesquisar Cliente</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="CSS/stylemenu.css" />
      <link rel="stylesheet" href="CSS/stylepesquisar.css" />
    </head>
    <body>
      <?php include 'menu.php'; ?>
      <div class="container mt-5">
        <div class="quadro-branco">
          <h2 class="text-center mb-4">Pesquisar Cliente</h2>
          <form action="pesquisarCliente.php" method="GET" class="formulario">
            <div class="mb-3">
              <label for="busca" class="form-label">Digite o ID ou Nome:</label>
              <input type="text" id="busca" name="busca" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Pesquisar</button>
          </form>
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
    <?php
    exit;
}

// Se chegou até aqui, é porque já buscou algo:
if (is_numeric($busca)) {
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE id_cliente = :id");
    $stmt->bindParam(":id", $busca, PDO::PARAM_INT);
} else {
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente WHERE nome LIKE :nome");
    $buscaNome = "%$busca%";
    $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
}

$stmt->execute();
$clientes = $stmt->fetchAll();

if (!$clientes) {
    die("<div class='container mt-5'><div class='quadro-branco'><p class='text-danger'>Erro: Nenhum cliente encontrado.</p></div></div>");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resultado da Pesquisa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="CSS/stylemenu.css" />
  <link rel="stylesheet" href="CSS/stylepesquisar.css" />
</head>
<body>

  <?php include 'menu.php'; ?>

  <div class="container mt-5">
    <div class="quadro-grande">
      <h2 class="text-center mb-4">Resultado da Pesquisa</h2>
      <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-purple">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($clientes as $cliente): ?>
            <tr>
              <td><?= htmlspecialchars($cliente['id_cliente']) ?></td>
              <td><?= htmlspecialchars($cliente['nome']) ?></td>
              <td><?= htmlspecialchars($cliente['endereco']) ?></td>
              <td><?= htmlspecialchars($cliente['telefone']) ?></td>
              <td><?= htmlspecialchars($cliente['email']) ?></td>
              <td>
                <a href="atualizarCliente.php?id=<?= $cliente['id_cliente'] ?>" class="btn btn-sm btn-secondary">Editar</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
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
