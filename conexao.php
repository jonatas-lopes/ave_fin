<?php

declare(strict_types=1);

global $con;

try{

    $con = new PDO('mysql:host=localhost;dbname=ave;','root');

}catch(Exception $e){

    echo $e->getMessage();
    die();


}