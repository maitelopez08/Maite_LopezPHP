<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>Funcionario</h2>
        <!-- FORMULARIO PARA CADASTRAR UM FORMULARIO-->
    <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">
        
        <!-- CAMPO PARA INSERIR O NOME DO FUNCIONARIO -->
        <label form="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>     

        <!-- CAMPO PARA INSERIR O TELEFONE DO FUNCIONARIO -->
        <label form="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>
                
        <!-- CAMPO PARA FAZER UPLOAD DA FOTO DO FUNCIONARIO -->
        <label form="foto">Foto:</label>
        <input type="file" name="foto" id="foto" required><br>

        <button type="submit">Cadastrar</button>
    </div>
</body>
</html>