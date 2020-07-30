<?php 

declare(strict_types=1);


include 'estaticos/header.php';
include 'estaticos/footer.php';
require 'Usuario.php';

$u = new Usuario();



?>

<table width="1%" class="table">
            <thead>
                <tr>
                   
                    <th>CPF</th>
                    <th>Nome</th>
                    
                </tr>
            </thead>
            <tbody>
               <?php

                    $u->Listar();


                ?>
                    
                        
            </tbody>
        </table>       
