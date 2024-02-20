<link rel="stylesheet" href="../style/style.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<script src="../script/script.js"></script>

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



//Login
$email = $_GET['email'];
$senha = $_GET['senha'];

session_abort();
session_start();

$res = mysqli_query($con, "SELECT email, senha FROM admin WHERE email = '$email' ");
$adminlog = mysqli_fetch_array($res);

$res2 = mysqli_query($con, "SELECT email, senha, ativo, id, nome FROM usuario WHERE email = '$email'");
$userlog = mysqli_fetch_array($res2);

if(isset($adminlog['email']) && $senha == $adminlog['senha'])
{
    header('location: ../menu/menuadmin.php');
}

if(isset($userlog[0]) == false)
{
    echo "<h3>Email não cadastrado!</h3>";
}
else
{
    if(isset($userlog[0]) && $userlog[1] == $senha)
    {
        if($userlog[2] == true)
        {
            $_SESSION['id'] = $userlog['id'];
            $_SESSION['nome'] = $userlog['nome'];
            header('location: ../menu/menu.php');
        }
        else{
            echo "<h3>Conta criada. Aguardando confirmação de ADM.</h3>";;
        }
    }
    else
    {
        echo "<h3>Email ou senha incorretos.</h3>";
    }
}

?>


<div class="voltarBtn">
    <a href="../index.php" >
    <h4>Voltar</h4>
    </a>
</div>