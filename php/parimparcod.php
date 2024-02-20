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
        <a href="../jogos/parimpar.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>Par ou Ímpar</h1>
</header>



<?php 

echo "<div class='parimpar'>";

    $host = "localhost:3306"; $user = "root"; $pas = ""; $base = "tchopsjogos"; $con = mysqli_connect($host, $user, $pas, $base);

    session_start();

    $id = $_SESSION['id'];

    $scoreq = mysqli_query($con, "SELECT FKuser_id, vitoria, derrota FROM parimpar WHERE FKuser_id = $id");
    $score = mysqli_fetch_array($scoreq);

    if(isset($score) == false)
    {
        $res = mysqli_query($con, "INSERT INTO parimpar VALUES ($id, 0, 0)");
    }

    @$impar = $_POST['parimpar'];

    @$num = intval($_POST['num']) ?? 0;

    $bot = rand(1,10);

    $soma = ($num + $bot);
    $result = ($soma % 2);
    $win;

    if(isset($num))
    {
        if($impar == True) {$result != 0?  $win = True: $win = False;}
        if($impar == False) {$result == 0? $win = True: $win = False;} 
        echo "<h3>Você jogou $num.</h3><h3>Bot jogou $bot.</h3>";
        $result != 0? print("<h3>A soma ($soma) é ímpar.</h3>"):  print("<h3>A soma ($soma) é par.</h3>");
        $win == True? print("<h3>Você venceu.</h3>"):print("<h3>Você perdeu.</h3>");

        if($win == True)
        {$res = mysqli_query($con, "UPDATE parimpar SET vitoria = vitoria + 1 WHERE FKuser_id = $id");}
        else {$res = mysqli_query($con, "UPDATE parimpar SET derrota = derrota + 1 WHERE FKuser_id = $id");}

        echo "</div>";
    }

    unset($num);
    
?>



<div class="voltarBtn">
    <a href="../jogos/parimpar.php" >
    <h4>Voltar</h4>
    </a>
</div>