<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TchopsJogos</title>
    <link rel="stylesheet" href="style/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>TchopsJogos</h1>
</header>


<div class="form">
    <div class="titulo">
        <h2 id="titulo">Login</h2>
    </div>
    
    <div class="forms">

        <div class="login next">
        <form action="php/indexcod.php" method="get">
        
            <h4>Email:</h4>
            <input type="email" maxlength="30" name="email" required>
            <br><br>
            <h4>Senha:</h4>
            <input type="password" maxlength="8" name="senha" required>
            <br><br>
            <h4>Não possui conta? <a id="register">Registre-se aqui!</a></h4>
            <button>Entrar</button>
        </form>
        </div>

        <div class="registro next">
        <form action="php/registrocod.php" method="get">
        
            <h4>Nome:</h4>
            <input type="text" maxlength="30" name="nome" required>
            <br><br>
            <h4>Email:</h4>
            <input type="email" maxlength="30" name="emailr" required>
            <br><br>
            <h4>Senha:</h4>
            <input type="password" maxlength="8" name="senhar" required>
            <br><br>
            <h4>Confirme a senha:</h4>
            <input type="password" maxlength="8" name="consenhar" required>
            <br><br>
            <h4>Já possui conta? <a id="login">Faça o login aqui!</a></h4>
            <button>Registrar</button>
        </form>
        </div>
    </div>


</div>



<script src="script/script.js"></script>

</body>
</html>