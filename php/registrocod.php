<link rel="stylesheet" href="../style/style.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<header>
    <div class="voltarIcon">
        <a href="../index.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>TchopsJogos</h1>
</header>

<?php

$host = "localhost:3306";
$user = "root";
$pas = "";
$base = "tchopsjogos";

$con = mysqli_connect($host, $user, $pas, $base);


//Registro
$nome = $_GET['nome'];
$email = $_GET['emailr'];
$senha = $_GET['senhar'];
$senhaCon = $_GET['consenhar'];

$res = mysqli_query($con, "SELECT * FROM usuario WHERE email = '$email' ");
$checkemail = mysqli_fetch_array($res);

if(isset($checkemail))
{
    echo"<h3>Email já cadastrado.</h3>";
}
else
{
    if($senha == $senhaCon)
    {
        $insert = mysqli_query($con, "INSERT INTO usuario (nome, email, senha, ativo) VALUES ('$nome', '$email', '$senha', false)");
        
        echo"<h3>Conta registrada com sucesso.</h3>";
    }
    else{
        echo"<h3>Senhas não coincidem.</h3>";
    }
}

?>

<div class="voltarBtn">
    <a href="../index.php" >
    <h4>Voltar</h4>
    </a>
</div>
