<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - Seleção</title>
</head>
<body>
    <?php
        $s = "lampada";
        switch ($s) {
            case "casa":
                print "A casa é amarela";
                break;
            case "arvore":
                print "a árvore é bonita";
                break;
            case "lampada":
                print "Joao apagou a lampada";
                break;
            default:
                print "você não selecionou";
                break;
        }
    ?>
</body>
</html>