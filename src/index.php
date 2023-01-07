<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
                    <div class="box">

        <section class="main">
           <div class="content-box">
            <h1>Login</h1>
            
            
            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
               
                        
            <div class="wrong">
                <p>Usuário ou senha inválidos.</p>
            </div>
            
            
            <?php
                endif;
                unset($_SESSION['nao_autenticado']);
            ?>
            
            
                <form action="login.php" method="POST">
                    
                    
                    <div class="field">
                        <div class="control">
                            <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="" required>
                        </div>
                    </div>
    
    
                    <div class="field">
                        <div class="control">
                            <input name="senha" class="input is-large" type="password" placeholder="Sua senha" required>
                        </div>
                    </div>
    
    
                        <a href="cadastro.php">Cadastrar</a>

                    
                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
               
               
                </form>
                </div> 
            
        </section>
                    </div>

    </body>

</html>