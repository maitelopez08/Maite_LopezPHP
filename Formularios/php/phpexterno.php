
<?php
if (
    isset($_POST['num_comanda']) && isset($_POST['id_produto']) && isset($_POST['categoria_produto']) && isset($_POST['nome_produto']) && isset($_POST['quantidade']) && isset($_POST['preco']) && isset($_POST['unidade'])
) {
    echo "Dados dos produtos recebidos:<br>";
    echo "Número de Comanda: " . $_POST['num_comanda'] . "<br>";
    echo "ID do Produto: " . $_POST['id_produto'] . "<br>";
    echo "Categoria: " . $_POST['categoria_produto'] . "<br>";
    echo "Nome: " . $_POST['nome_produto'] . "<br>";
    echo "Quantidade: " . $_POST['quantidade'] . "<br>";
    echo "Preço: " . $_POST['preco'] . "<br>";
    echo "Unidade: " . $_POST['unidade'] . "<br>";
}
?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comanda</title>
</head>
<body>


    <?php
        if (!isset($_SESSION['comanda'])) {
            $_SESSION['comanda'] = array();
        }

        if (isset($_GET['produto']) && $_GET['produto'] != "") {
            $_SESSION['comanda'][] = $_GET['produto'];
        }

        $lista = $_SESSION['comanda'];
    ?>

<address>
    <center>Maite López / Estudante / Técnico Desenvolvimento de Sistemas</center>
  </address>
</body>
</html>




