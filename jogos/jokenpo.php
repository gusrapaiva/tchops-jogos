<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokenpô</title>
    <link rel="stylesheet" href="../style/jokenpo.css"/>
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="voltarIcon">
        <a href="../menu/menu.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>Jokenpô</h1>
</header>

<form method="get" action="../php/jokenpocod.php">
    <div class="formjkp">
    <select name="jogador" required>
        <option value="4" id='oi' selected value='4'>Escolha..</option>
        <option value="0">Pedra</option>
        <option value="1">Papel</option>
        <option value="2">Tesoura</option>
    </select>

    <button>Jogar</button>
    </div>
</form>




</body>
</html>