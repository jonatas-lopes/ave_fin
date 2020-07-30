<?php 
    require 'conexao.php';
    require 'sessao.php';

    class Usuario{


        public function Login($cpf,$senha){
        
        global $con;

        $sql = "SELECT * FROM usuario WHERE cpf = :cpf AND senha = :senha";

        $sql = $con->prepare($sql);
        $sql->bindValue("cpf",$cpf);
        $sql->bindValue("senha",$senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['usuario'] = $dado['id'];
            return true;
        }else{
            return false;
        }


        }

        public function Listar(){

            global $con;
            $sql = 'SELECT * FROM usuario';

            foreach($con->query($sql) as $key => $value){

                echo '<tr><td>'.$value['cpf'].'</td>
                        <td>'.$value['nome'].'</td>
                        <td class="text-right"></td>
                    </tr>';

                   
                }
                
                
                   
             
              
               
                        
                        
                    
                            
                            
                            
                        
                    
                
            
            
          

        }


    }