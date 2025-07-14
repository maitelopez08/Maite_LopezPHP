<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $estados = array("PR", "SC", "RS", "SP", "RJ", "MG", "BA", "RN", "AM");

        echo "ORIGINAL: ";
        print_r($estados);

        echo "<hr>STRTOLOWER: Converte uma string para minúsculas<br>";
        for ($i = 0; $i < count($estados); $i++) {
            $estados[$i] = strtolower($estados[$i]);
        }
        echo "STRTOLOWER: ";
        print_r($estados);

        echo "<hr>POP: Remove o último elemento do array<br>";
        array_pop($estados);
        echo "POP: ";
        print_r($estados);

        echo "<hr>PUSH: Adiciona um elemento ao final do array<br>";
        array_push($estados, "ce");
        echo "PUSH: ";
        print_r($estados);

        echo "<hr>REVERSE: Inverte a ordem dos elementos do array<br>";
        $inverso = array_reverse($estados);
        echo "REVERSE: ";
        print_r($inverso);

        echo "<hr>SORT: Ordena os elementos de um array em ordem crescente<br>";
        sort($estados);
        echo "SORT: ";
        print_r($estados);

        echo "<hr>SLICE: Extrai uma parte de um array<br>";
        $dividir = array_slice($estados, 1, 2);
        echo "SLICE: ";
        print_r($dividir);
        echo "<br>";
    ?>
<address>
        <center>Maite López / Estudante / Técnico de Desenvolvimento de Sistemas</center>
</address>
</body>
</html>