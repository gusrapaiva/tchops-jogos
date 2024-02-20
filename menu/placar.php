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
    <style>body{height: auto;}</style>
</head>
<body>

<header>
    <div class="voltarIcon">
        <a href="menu.php"><img src="../assets/voltar.png"></a>
    </div>

    <h1>Rankings</h1>

</header>

<?php

    $host = "localhost:3306"; $user = "root"; $pas = ""; $base = "tchopsjogos"; $con = mysqli_connect($host, $user, $pas, $base);

    $resjkp = mysqli_query($con, "select u.nome, u.id, j.vitoria from usuario u left join jokenpo j on u.id = FKuser_id order by j.vitoria desc");
    $respar = mysqli_query($con, "select u.nome, u.id, p.vitoria from usuario u left join parimpar p on u.id = FKuser_id order by p.vitoria desc");
    $resguess = mysqli_query($con, "select u.nome, u.id, g.acerto from usuario u left join guessnum g on u.id = FKuser_id order by g.acerto desc");
    $resforca = mysqli_query($con, "select u.nome, u.id, f.acerto from usuario u left join forca f on u.id = FKuser_id order by f.acerto desc");

    
    {
        echo " <div class='rank'><h2>Jokenpo</h2>  <div class='tabela'> <table> <tr> <th>Rank</th> <th>Nome</th> <th>ID</th> <th>Vitórias</th> </tr>";
        $i = 1;
        while($i <= 3)
        {
            $escrever = mysqli_fetch_array($resjkp);
            echo "<tr> <td>".$i."º</td> <td>".$escrever['nome']."</td> <td>".$escrever['id']."</td><td>".$escrever['vitoria']."</td> </tr>";
            $i+=1;
        }
        echo"</table> </div> </div>";
    }


    {
        echo " <div class='rank'><h2>Par ou Ímpar</h2>  <div class='tabela'><table> <tr> <th>Rank</th> <th>Nome</th> <th>ID</th> <th>Vitórias</th> </tr>";
        $i = 1;
        while($i <= 3)
        {
            $escrever = mysqli_fetch_array($respar);
            echo "<tr> <td>".$i."º</td>  <td>".$escrever['nome']."</td> <td>".$escrever['id']."</td><td>".$escrever['vitoria']."</td></tr>";
            $i+=1;
        }
        echo"</table> </div> </div>";
    }

    {
        echo " <div class='rank'><h2>Adivinhe o número</h2>  <div class='tabela'><table> <tr> <th>Rank</th> <th>Nome</th> <th>ID</th> <th>Acertos</th> </tr>";
        $i = 1;
        while($i <= 3)
        {
            $escrever = mysqli_fetch_array($resguess);
            echo "<tr> <td>".$i."º</td>  <td>".$escrever['nome']."</td> <td>".$escrever['id']."</td><td>".$escrever['acerto']."</td></tr>";
            $i+=1;
        }
        echo"</table> </div> </div>";
    }

    {
        echo " <div class='rank'><h2>Forca</h2>  <div class='tabela'><table> <tr> <th>Rank</th> <th>Nome</th> <th>ID</th> <th>Acertos</th> </tr>";
        $i = 1;
        while($i <= 3)
        {
            $escrever = mysqli_fetch_array($resforca);
            echo "<tr> <td>".$i."º</td>  <td>".$escrever['nome']."</td> <td>".$escrever['id']."</td><td>".$escrever['acerto']."</td></tr>";
            $i+=1;
        }
        echo"</table> </div> </div>";
    }

?>


</body>
</html>