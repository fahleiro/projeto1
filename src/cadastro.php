<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
    
            <div class="box">

    <section class="main">
        
        
            <h1>Cadastro</h1>
            
            
            <?php
                if($_SESSION['status_cadastro']):
            ?>
        
        
            <div class="cadastrado">
                <p>Cadastro efetuado!</p>
                <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
            </div>
                    
                    
            <?php
                endif;
                unset($_SESSION['status_cadastro'])
            ?>
            
            
            <?php
                if($_SESSION['usuario_existe']):
            ?>
                 
                 
            <div class="existente">
                <p value="existe">O usuário escolhido já existe. Informe outro e tente novamente.</p>
            </div>
            
            
            <?php
                endif;
                unset($_SESSION['usuario_existe'])
            ?>
            
            
            <div class="fields">
                <form action="cadastrar.php" method="POST">
                    
                    
                    <div class="field">
                        <div class="control">
                            <input MAXLENGTH="15" name="nome" type="text" class="input is-large" placeholder="Nome" autofocus required>
                        </div>
                    </div>
                     
                     
                    <div class="field">
                        <div class="control">
                            <input MAXLENGTH="3" name="usuario" type="text" class="input is-large" placeholder="Usuário" required>
                        </div>
                    </div>
                    
                    
                    <div class="field">
                        <div class="control">
                            <input MAXLENGTH="5" name="senha" class="input is-large" type="password" placeholder="Senha" required>
                        </div>
                    </div>
                    
                           <a href="index.php" class="logar">Login</a>

                    <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>

                
                </form>
        </div>
    </section>
                </div>

</body>

</html>