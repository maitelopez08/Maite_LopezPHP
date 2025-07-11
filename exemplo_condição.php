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
             if ($nota >= 7)
             {
                echo"Você está aprovado!";
             }
             elseif($nota < 7)
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