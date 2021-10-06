<?php
 
 require_once 'classe.php';
 $p= new pessoa;


 $email =  $_POST['email'];
 
 
 
 $p->conectar("pweb.usuario", "localhost", "root", "");
 if($p->erro == "")
 {
     $p->excluir($email);
 }
 else{
     echo "erro na conexão";
 }
 



?>