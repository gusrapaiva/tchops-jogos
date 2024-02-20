<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forca</title>
    <script src="../script/forca.js"></script>
    <link rel="stylesheet" href="../style/forca.css">
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

        <h1>Forca!</h1>
    </header>

    
    <h3 id="chances">Erros: 0</h3>

    <div class="forcaform">
    <h4>Digite uma letra</h4>
    
    <input type="text" id="entry" required maxlength="1" size="7">
    <br>
    <button id="bota">Enviar</button>
    </div>
    
    
    <h3 id="msg"></h3>
    
    <form method="post" action="../php/forcacod.php" id="form">
        <input type="text" id="ghost" name="result">
        <input type="text" id="ghostword" name="palavra">
        <br><br>
    </form>

    <div class="forca" id="forca"></div>

    <button id="restart" onclick="recarrega()" style="visibility: hidden;">Recomeçar</button>
    
</body>
</html>