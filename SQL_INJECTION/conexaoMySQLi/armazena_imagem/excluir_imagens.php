<?php
require("conecta.php");


//OBTEM O id DA IMAGEM DA URL, GARANTINDO SEJA UM NUMERO INTEIRO
$id_imagem = isset($_GET['id'])? intval($_GET['id']):0;


//VERIFICA SE O id É VALIDO (MAIOR QUE ZERO)
if($id_imagem >0){
    //CRIA A QUERY SEGURA USANDO O prepare statment
    $queryExclusao = "DELETE FROM imagens WHERE codigo = ?";

    //PREPARA A QUERY
    $stmt = $conexao->prepare($queryExclusao);
    $stmt->bind_param("i",$id_imagem); //DEFINE O ID COM UM INTTEIRO

    //EXECUTA A EXCLUSAO
    if($stmt->execute()){
        echo "Imagem excluida com sucesso! ";
    }else{
        die("Erro ao excluir a imagem: ".$stmt->error);
    }
    //FECHA A CONSULTA
    $stmt->close();
}else{
    echo "ID inválido";
}
//REDIRECIONA PARA A INDEX.PHP E GARANTE QUE O SCRPIT PARE
header("Location: index.php");
exit();
?>