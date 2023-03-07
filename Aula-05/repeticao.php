<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1>Repetição</h1>
    <?php
    //array
    $clientes = ["Leandro","jeffer","todoroki","midoriya","bakugo","floppy","one"];
    $i = 0;
    
    while($i < count($clientes)){
        echo "$clientes[$i]<br>";
        $i++;
    }
    echo "<hr>";
    for ($i=0; $i < count($clientes); $i++) {
        echo "$clientes[$i]<br>";
    }
    ?>
    <script src="app.js"></script>
</body>
</html>