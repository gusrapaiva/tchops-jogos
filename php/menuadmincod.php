<?php

$host = "localhost:3306";
    $user = "root";
    $pas = "";
    $base = "tchopsjogos";

    $con = mysqli_connect($host, $user, $pas, $base);

    $res = mysqli_query($con, "SELECT id FROM usuario");
    


while($escrever = mysqli_fetch_array($res))
{
    $checkbox = $_GET['check'.$escrever['id']] ?? 0;


    $res2 = mysqli_query($con, "UPDATE usuario SET ativo = $checkbox WHERE id = '$escrever[0]' ");

}

?>

<script>
    window.onload(window.location = "../menu/menuadmin.php")
</script>