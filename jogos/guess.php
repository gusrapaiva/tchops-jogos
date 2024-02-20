<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TchopsJogos</title>
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<header>
    <div class="voltarIcon">
        <a href="../menu/menu.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>Adivinhe o número</h1>
</header>

<h2>Adivinhe o número de 1 à 10</h2>

<form method="post">
    <div class="guess">
    <input type="number" name='guess' required maxlength='3'>
    <br><br>
    <button>Chute!</button>
    </div>
</form>

<?php  

    $host = "localhost:3306"; $user = "root"; $pas = ""; $base = "tchopsjogos"; $con = mysqli_connect($host, $user, $pas, $base);

    session_start();

    $id = $_SESSION['id'];

    $scoreq = mysqli_query($con, "SELECT FKuser_id, acerto, erro FROM guessnum WHERE FKuser_id = $id");
    $score = mysqli_fetch_array($scoreq);

    if(isset($score) == false)
    {
        $res = mysqli_query($con, "INSERT INTO guessnum VALUES ($id, 0, 0)");
    }

    $num = null;
    $num = rand(1, 10);
    @$guess = intval($_POST['guess']) ?? null;


    if ($guess != null)
        if($num != $guess)
        {
            echo("<h3>Errou. O número era $num Tente novamente</h3>");
            $res2 = mysqli_query($con, "UPDATE guessnum SET erro = erro + 1 WHERE FKuser_id = $id");
        }
        if($num == $guess)
        {
            echo"<h3>Acertou</h3>";
            $res3 = mysqli_query($con, "UPDATE guessnum SET acerto = acerto + 1 WHERE FKuser_id = $id");
        }

        unset($guess);

    // mysqli_close($con);

?>
