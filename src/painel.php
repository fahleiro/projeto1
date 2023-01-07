<?php
session_start();
include('verifica_login.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Painel</title>
    </head>
    
    
    <body>
        
        <div class="box">
        
            <h2>Olá, <?php echo $_SESSION['nome'];?></h2>
            
            <h2><a href="logout.php">Sair</a></h2>
        </div>
    </body>



</html>