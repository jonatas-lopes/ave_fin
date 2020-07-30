<?php 
session_start();
?>

<!DOCTYPE html>

<head>
        <meta charset="UTF-8">
        <title>Ave - Soluções financeiras</title>
        <link rel="stylesheet" href="assets/css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        
</head>

<body id="total">
                <?php 
                    
                    $valida = isset($_SESSION['valida']) ? $_SESSION['valida'] : '';

                    if(!empty($valida)){
                        echo $valida;
                    }
                
                    session_destroy();

                ?>   
<div id="login" class="container" style="max-width:300px">
         
    <form action="logar.php" method="post">
         

        <div class="titulo">
            <p class="navbar-brand" href="login.php">
            <img src="assets/brands/ave.jpg" width="30" height="30" class="d-inline-block align-top" alt="login.php">
             Ave - Soluções Financeiras
            </p>
            </div>
            
        <div class="form-group">          
            <input type="text" name="cpf" class="form-control" id="cpf" aria-describedby="cpf" placeholder="CPF">
        </div>
        <div class="form-group">           
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
        </div>
        <div class="entrar">                
            <button id="botao_entrar" type="submit" class="btn btn-outline-dark">Entrar</button>           
        </div>
         </form> 
         </div>

</body>

</html>
        
            
