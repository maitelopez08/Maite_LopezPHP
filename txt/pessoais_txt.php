<?php
    list($nome, $passatempo, $curso) = file ("pessoais.txt");
    echo "Nome: $nome <br/>";
    echo "Passatempo: $passatempo <br/>";
    echo "Curso: $curso <br/>";
    #le o arquivo em uma matriz de linhas e descompacta as linhas em variaveis
    #precisa saber o tamanho / formato exato de um arquivo
?>
