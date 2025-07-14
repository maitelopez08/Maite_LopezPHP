<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura e sanitiza os dados
    $num_comanda = htmlspecialchars($_POST["num_comanda"]);
    $id_produto = htmlspecialchars($_POST["id_produto"]);
    $categoria = htmlspecialchars($_POST["categoria_produto"]);
    $nome = htmlspecialchars($_POST["nome_produto"]);
    $quantidade = (int) $_POST["quantidade"];
    $preco = htmlspecialchars($_POST["preco"]);
    $unidade = htmlspecialchars($_POST["unidade"]);

    // Exemplo: salvar em um arquivo .txt
    $linha = "Comanda: $num_comanda | ID: $id_produto | Categoria: $categoria | Nome: $nome | Quantidade: $quantidade | Preço: $preco | Unidade: $unidade" . PHP_EOL;
    file_put_contents("comandas.txt", $linha, FILE_APPEND);

    echo "<h3>Comanda registrada com sucesso!</h3>";
    echo "<a href='comanda.html'>Voltar ao formulário</a>";
} else {
    echo "<p>Método inválido.</p>";
}
?>
