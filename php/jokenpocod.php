<title>Jokenpô</title>
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="stylesheet" href="../style/jokenpo.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<header>
    <div class="voltarIcon">
        <a href="../jogos/jokenpo.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>TchopsJogos</h1>
</header>


<?php

    $host = "localhost:3306"; $user = "root"; $pas = ""; $base = "tchopsjogos"; $con = mysqli_connect($host, $user, $pas, $base);

    session_start();

    $nome = $_SESSION['nome'];

    @$jogador = 4;
    @$jogador = intval($_GET['jogador']) ;

    $scoreq = mysqli_query($con, "SELECT * FROM jokenpo WHERE FKuser_id = '$_SESSION[id]'");
    $score = mysqli_fetch_array($scoreq);

    if(isset($score) == false)
    {
        $insert = mysqli_query($con, "INSERT INTO jokenpo VALUES ('$_SESSION[id]', 0, 0, 0)");
    }
    

    $opt = ["Pedra", "Papel", "Tesoura"];

    if($jogador == 4)
    {
        // $bot = $jogador;
        echo "<h3>Escolha uma opção</h3>";
    }

    if($jogador >= 0 && $jogador <= 2)
    {
        $bot = rand(0,2);

        $bot = $opt[$bot];
        $jogador = $opt[$jogador];
        $status;

        echo "
        <div class='fotos'>  
            <div class='jogador'> <h4>".$nome."</h4> <img src='../assets/".$jogador.".png' width='200px'></div> 
            <div class='vs'>Vs.</div>
            <div class='bot'> <h4>Bot</h4> <img src='../assets/".$bot.".png' width='200px'> </div> 
        </div>";

        $res2 = mysqli_query($con, "SELECT vitoria, derrota, empate FROM jokenpo WHERE FKuser_id = $_SESSION[id]");
        $kd = mysqli_fetch_array($res2);

        if($jogador == "Papel" && $bot == "Pedra" || $jogador == "Tesoura" && $bot == "Papel" || $jogador == "Pedra" && $bot == "Tesoura")
        {$result = "vitoria"; $status = "venceu!"; $res = mysqli_query($con, "UPDATE jokenpo SET $result = $kd[0] + 1 WHERE FKuser_id = '$_SESSION[id]' ");}
        if($jogador == "Pedra" && $bot == "Papel" || $jogador == "Papel" && $bot == "Tesoura" || $jogador == "Tesoura" && $bot == "Pedra")
        {$result = "derrota"; $status = "perdeu!"; $res = mysqli_query($con, "UPDATE jokenpo SET $result = $kd[1] + 1 WHERE FKuser_id = '$_SESSION[id]' ");}
        if($jogador == $bot){$result = "empate"; $status = "emapatou!"; $res = mysqli_query($con, "UPDATE jokenpo SET $result = $kd[2] + 1 WHERE FKuser_id = '$_SESSION[id]' ");}

        echo "<h2>Você ".$status."</h2>";
        
        unset($bot);
        unset($jogador);
    }



?>
