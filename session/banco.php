<?php
    $bdServidor = 'localhost';
    $bdUsuario = 'root';
    $bdSenha = '123';
    $bdBanco = 'maite_lopez';
    $conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
        if(mysqli_connect_errno()) {
            echo "Problemas para conectar no banco. Verifique os dados";
            die();
        }