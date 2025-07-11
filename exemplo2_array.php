<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $estados = array("PR","SC","RS","SP","RJ","MG","BA","RN","AM");
        echo "ORIGINAL: ";
        print_r ($estados);
        echo "<hr/>STRTOLOWER: Converte uma string para minúsculas<br/>";
        for ($i = 0; $i < count($estados); $i++){
            $estados[$i] = strtolower($estados[$i]);
        }
        echo "STRTOLOWER: "; print_r($estados);
        echo "<hr/>SHIFT: Retira o primeiro elemento de um array<br/>";
        $rotaciona = array_shift($estados);
        echo "SHIFT: "; print_r($estados);
        echo "<hr/>POP: Extrai um elemento do final do array<br/>";
        array_pop($estados);
        echo "POP: "; print_r($estados);
        echo "<hr/>PUSH: Adiciona um ou mais elementos no final de um array<br/>";
        array_push($estados, "pr");
        echo "<hr/>REVERSE: Restorna um array com os elementos na ordem inversa<br/>";
        $inverso = array_reverse($estados);
        echo "REVERSE: ": print_r($inverso);
        echo "<hr/>SORT: Ordena"

    
    
    ?>
</body>
</html>