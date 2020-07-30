<?php 

declare(strict_types=1);

require 'conexao.php';
require 'Usuario.php';
require 'sessao.php';


$u = new Usuario();


$cpf = addslashes($_POST['cpf']);
$senha = addslashes($_POST['senha']);


if(empty($cpf) || empty($senha)){

    $_SESSION['valida'] = '<div class="alert alert-danger">Todos os campos devem ser preenchidos!</div>';
    header('location:login.php');
    return;

}

$u->Login($cpf,$senha);


if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
    return header('location:index.php');
}else{
    $_SESSION['valida'] = '<div class="alert alert-danger">Usuario e senha invalidos!</div>';
    header('location:login.php');
    return;
}

if(isset($cpf) && isset($senha)){
    $login = Login($cpf,$senha);
    if($login == true){
        header('location:index.php'); 
    }
   
}













