<?php

 Class pessoa {

    private $pdo;
    public $erro = "";
        public function conectar($nome, $host, $usuario, $senha){
            global $pdo;
            global $erro;

            try
            {
                $pdo = new PDO("mysql: dbname=".$nome.";host=".$host, $usuario, $senha);
            }
            catch(PDOException $e)
            {
                $erro=$e->getMessage();
            }
          
        }
    public function excluir($email){
        global $pdo;
        $sql = $pdo->prepare("select * from cadastro where nome = :a");
        $sql->bindValue(":a", $nome);
        $sql->execute();
        if($sql->rowCount() < 0){
            return false;
            echo "usuário não foi utilizado";
        }
        else{
            $sql = $pdo->prepare("delete * from pweb.usuario where email = :e");
             $sql->bindValue(":e", $email);

            $sql->execute();
            return true;
            echo "usuário excluído";
        }
        

    }

 }

?>