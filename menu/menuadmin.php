<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
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
</header>

<h2>Contas pendentes:</h2>

    
<?php

    $host = "localhost:3306";
    $user = "root";
    $pas = "";
    $base = "tchopsjogos";

    $con = mysqli_connect( $host, $user, $pas, $base);

    $res = mysqli_query($con, "SELECT id, nome, email, ativo FROM usuario");
    
    echo " <form method='get' action='../php/menuadmincod.php'> <div class='tabela'> <table border>   <tr> <th>ID</th> <th>Nome</th> <th>Email</th> <th>Ativo?</th> </tr>";

    while($escrever = mysqli_fetch_array($res))
    {
        // echo "<tr> <td>".$escrever['id']."</td><td>".$escrever['nome']."</td> <td>".$escrever['email']."</td> <td>".$escrever['ativo']."</td> </tr>";
        if($escrever['ativo'] == true)
        {
            echo "<tr> <td>".$escrever['id']."</td><td>".$escrever['nome']."</td> <td>".$escrever['email']."</td> <td><input type='checkbox' checked name='check".$escrever[0]."' class='check' value='1'></td> </tr>";  
        }
        else{
            echo "<tr> <td>".$escrever['id']."</td><td>".$escrever['nome']."</td> <td>".$escrever['email']."</td> <td><input type='checkbox' name='check".$escrever[0]."' class='check' value='1'></td> </tr>";
        }
        // header('refreash: 5');

    }

    echo"</table> </div>";

    echo "<br><br> <button>Atualizar</button>  </form> ";
   




?>


<script>
        
    function recarregar()
    {   
        location.reload()            

    }
</script>

</body>
</html>