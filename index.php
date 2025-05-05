<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio Aleatório</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <main>
        <h1>Número Sorteado</h1>
        <?php
            $min = 1;
            $max = 100;
            $num = mt_rand($min, $max); //a função mt_rand função gera automaticamente um número com os meus parâmetros de máx e min
            echo "<div class='numero-sorteado'>$num</div>";
        ?>
        <br>
        <br>
        <button onclick="window.location.href='index.html'"> VOLTAR </button> 
    </main>
</body>

</html>