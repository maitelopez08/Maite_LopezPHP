<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/styledeletar.css">
    <link rel="stylesheet" href="CSS/stylemenu.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="quadro-branco">
    <h2 class="text-center mb-4">Excluir Cliente</h2>
    <form action="processarDelecao.php" method="POST" class="mb-3 formulario">
        <div class="mb-3">
            <label for="id">ID do Cliente:</label>
            <input type="number" id="id" name="id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Excluir Cliente</button>

    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <address>
  <center>
        Maite López | Estudante | Técnico em Desenvolvimento de Sistemas
  </center>
    </address>
</body>
</html>