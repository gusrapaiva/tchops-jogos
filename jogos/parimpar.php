<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="stylesheet" href="../style/jokenpo.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="voltarIcon">
        <a href="../menu/menu.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>Par ou Ímpar</h1>
</header>

<form method="post" action="../php/parimparcod.php">
    <div class="game">
        <h4>Você é:</h4>
        <br>
        <select name="parimpar">
            <option value="0">Par</option>
            <option value="1">Ímpar</option>
        </select>
        <br><br>
        <input placeholder="Seu número.." type="number" name="num" required>
        <br><br><br>
        <button>Jogar</button>
    </div>
</form>


