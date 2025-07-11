<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções String</title>
</head>
<body>
    <?php
        #index o12345678901234
        echo $name = "Stefanie Hatcher <br>";
        echo $length = strlen($name);
        echo $cmp = strcmp($name, "Brian Le");
        echo $index = strpos($name, "e");
        echo $first = substr($name, 9, 5);
        echo $name = strtoupper($name);
    ?>
        <adress> Maite López / Tecnico em desenvolvimento de sistemas
        <adress>
</body>
</html>