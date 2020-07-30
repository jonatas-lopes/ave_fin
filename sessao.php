<?php 

declare(strict_types=1);
session_start();



if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){

    header('location:login.php');
}


if(isset($_GET['acao']) && $_GET['acao'] == 'encerrar'){
    session_destroy();
    header('location:login.php');
}




