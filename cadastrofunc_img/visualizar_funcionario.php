<?php
    //CONEXAO COM O BANCO DE DADOS
    $host = 'localhost';
    $dbname = 'bd_imagens';
    $username = 'root';
    $password = '';

    try{
        //CONEXÃO COM O BANCO DE DADOS USANDO PDO
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //DEFINE QUE ERROS VAO LANÇAR EXCEÇÕES

        //VERIFICA SE O ID FOI PASADO NA URL
        if(isset($_GET['id'])){
            $id=$_GET['id']; //OBTEM O id DO FUNCIONARIO ATRAVES DA url

            //RECUPERA OS DADOS DO FUNCIONARIO NO BANCO DE DADOS
            $sql = "SELECT nome,telefone,tipo_foto,foto FROM funcionarios WHERE id=:id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id',$id,PDO::PARAM_INT); //VINCULA O VALOR DO id AO PARAMETRO :id
            $stmt->execute(); //EXECUTA A INSTRUÇÃO SQL

            //VERIFICA SE ENCONTROU O FUNCIONARIO
            if($stmt->rowCount()>0){
                //A LINHA ABAIXO BUSCA OS DADOS DOS FUNCIONARIOS COM UM ARRAY ASSOCIATIVO
                $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

            //VERIFICA SE FOI SOLICITADO A EXCLUSAO DO FUNCIONARIO
            //LINHA ABAIXO VERIFICA SE OS DADOS FOREAM ENVIADOS VIA FORMULARIO COM O METODO POST
            //isset VERIFICA SE HÁ UM VALOR DEFINIDO NA VARIAVEL
            //VERIFICA SE O FORMULARIO FOI ENVIADO VIA POST E SE EXISTE O CAMPO "excluir_id"
            if ($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['excluir_id'])){
                //A LINHA ABAIXO PEGA O VALOR id QUE FOI ENVIADO PELO FORMULARIO(id DO FUNCIONARIO A SER EXCLUIDO)
                $excluir_id = $_POST['excluir_id'];
                
                //MONTA A QUERY SQL PARA DELETAR O FUNCIONARIO COM O id CORRESPONDENTE
                $sql_excluir = "DELETE FROM funcionarios WHERE id = :id";

                //PREPARA A QUERY PARA A EXECUÇÃO SEGURA EVITANDO MYSQL INJECTION
                $stmt_excluir = $pdo->prepare($sql_excluir);

                //ASSOCIA O VALOR id AO PARAMETRO :id NA QUERY GARANTINDO QUE SERA TRATADO COMO UM NUMERO 
                $stmt_excluir->bindParam(':id',$excluir_id, PDO::PARAM_INT);

                //EXECUTA A QUERY EXCLUINDO O FUNCIONARIO DO BD
                $stmt_excluir->execute();
                header("Location: consulta_funcionario.php");
                exit();
            }     
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar funcionario</title>
</head>
<body>
    <h1>Dados do Funcionario</h1>
    <p>Nome:<?=htmlspecialchars($funcionario['nome'])?></p>
    <p>Telefone:<?=htmlspecialchars($funcionario['telefone'])?></p>
    <p>Foto:</p>
    <img src="data:<?= $funcionario['tipo_foto'] ?>;base64,<?= base64_encode($funcionario['foto']) ?>" alt="Foto do Funcionário">

        
    <!-- FORMULARIO PARA EXCLUIR FUNCIONARIO -->
    <form method="POST">
        <input type="hidden" name="excluir_id" value="<?=$id ?>">
        <button type="submit">Excluir Funcionario </button>
    </form>
</body>
</html>
<?php
      }else{
            echo "Funcionario não encontrado.";
      }            
    }else{
        echo "ID do funcionario não foi fornecido.";
    }
}catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
}
?>