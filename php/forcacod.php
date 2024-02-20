    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forca</title>
    <script src="../script/forca.js"></script>
    <link rel="stylesheet" href="../style/forca.css">
    <link rel="stylesheet" href="../style/style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <header>
        <div class="voltarIcon">
            <a href="../jogos/forca.php"><img src="../assets/voltar.png"></a>
        </div>

        <h1>Forca!</h1>
    </header>

<?php 

    $host = "localhost:3306"; $user = "root"; $pas = ""; $base = "tchopsjogos"; $con = mysqli_connect($host, $user, $pas, $base);

    session_start();

    $scoreq = mysqli_query($con, "SELECT * FROM forca WHERE FKuser_id = '$_SESSION[id]'");
    $score = mysqli_fetch_array($scoreq);

    if(isset($score) == false)
    {
        $insert = mysqli_query($con, "INSERT INTO forca VALUES ('$_SESSION[id]', 0, 0)");
    }

    @$acerto = $_POST['result'];
    @$palavra = $_POST['palavra'];

    if($acerto == 'acerto')
    {
        $res = mysqli_query($con, "UPDATE forca SET acerto = acerto + 1 WHERE FKuser_id = '$_SESSION[id]' ");
        echo "<h2>Você venceu!</h2>";
    }

    if($acerto == 'erro')
    {
        $res = mysqli_query($con, "UPDATE forca SET erro = erro + 1 WHERE FKuser_id = '$_SESSION[id]'");
        echo "<h2>Você perdeu. <br> A palavra é: $palavra</h2>";
    }

?>

<div class="voltarBtn">
    <a href="../jogos/forca.php" >
    <h4>Voltar</h4>
    </a>
</div>