<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota = 6.9;
        $aprovado = ($nota >= 7);
        $recuperação = ($nota < 7);
        $reprovado = ($recuperação < 7);
             if ($aprovado)
             {
                echo"Você está aprovado!";
             }
             elseif($recuperação)
             {
                echo "Você está de recuperação";
             }
             else
             {
                echo "Você está reprovado";
             }
        
    ?>
</body>
</html>