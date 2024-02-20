<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TchopsJogos</title>
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="voltarIcon">
        <a href="../index.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>TchopsJogos</h1>

    <div class="placarIcon">
        <a href="placar.php"><img src="../assets/placar.png" title="Ranking"></a>
    </div>
</header>

<!-- <h1>Jogos malucos</h1> -->

<div class="wrapper">
    
    <div class="card">
        <div class="name"><h2>Jokenpo</h2></div>
        <div class="img"><img src="../assets/jokenpo.jpg"></div>
        <div class="desc"><p>O clássico Pedra, Papel ou tesoura</p></div>
    </div>

    <div class="card">
        <div class="name"><h2>Par ou Ímpar</h2></div>
        <div class="img"><img src="../assets/parimpar.jpg"></div>
        <div class="desc"><p>Clássico par ou ímpar contra a máquina</p></div>
    </div>
    
    <div class="card">
        <div class="name"><h2>Adivinhe</h2></div>
        <div class="img"><img src="../assets/guess.jpeg"></div>
        <div class="desc"><p>Acerte o número gerado aleatoriamente entre 1 e 10</p></div>
    </div>
    
    <div class="card">
        <div class="name"><h2>Forca</h2></div>
        <div class="img"><img src="../assets/forca.jpg"></div>
        <div class="desc"><p>Tente adivinhar a palavra pelas letras. 5 Erros permitidos</p></div>
    </div>

</div>

<script>

    window.onload = function()
    {
        let card = document.getElementsByClassName('card');
    
        card[0].onclick = function() {window.location.href = "../jogos/jokenpo.php"}
        card[1].onclick = function() {window.location.href = "../jogos/parimpar.php"}
        card[2].onclick = function() {window.location.href = "../jogos/guess.php"}
        card[3].onclick = function() {window.location.href = "../jogos/forca.php"}

    }

</script>


</body>
</html>