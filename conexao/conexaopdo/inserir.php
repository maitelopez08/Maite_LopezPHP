<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

   <link rel="stylesheet" href="CSS/stylemenu.css">
   <link rel="stylesheet" href="CSS/styleinserir.css">
  
</head>

<body class="bg-light">

  <?php include 'menu.php'; ?>

  <div class="container mt-5">
    <div class="quadro-branco">
      <h2 class="text-center mb-4">Cadastro de Cliente</h2>

      <form action="processarinsercao.php" method="POST" class="formulario-personalizado">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome:</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço:</label>
          <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>

        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone:</label>
          <input type="text" class="form-control" id="telefone" name="telefone" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Cliente</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
