<!-- 
    Desenvolvido por Marcos Martins - 
    Funções e interações com o DB
    -->
<?php

//Importando as configurações do banco
require_once("../init.php") ;

class Banco{

    protected $mysqli ;

    public function __construct(){
        $this->conexao() ;
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO) ;
    }

    public function setUsuario($nome,$idade,$email){
        $stmt = $this->mysqli->prepare("INSERT INTO usuarios (`nome`, `idade`, `email`) VALUES (?,?,?)") ;
        $stmt->bind_param("sss",$nome,$idade,$email) ;
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false ;
        }

    }

    public function getUsuario(){
        $result = $this->mysqli->query("SELECT * FROM usuarios") ;
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row ;
        }
        return $array ;

    }

    public function deleteUsuario($id){
        if($this->mysqli->query("DELETE FROM `usuarios` WHERE `nome` = '".$id."';")== TRUE){
            return true ;
        }else{
            return false ;
        }

    }
    public function pesquisaUsuario($id){
        $result = $this->mysqli->query("SELECT * FROM `usuarios` WHERE `nome`='$id'") ;
        return $result->fetch_array(MYSQLI_ASSOC) ;

    }
    public function updateUsuario($nome,$idade,$email,$id){
        $stmt = $this->mysqli->prepare("UPDATE `usuarios` SET `nome` = ?, `idade`=?, `email`=? WHERE `nome` = ?") ;
        $stmt->bind_param("ssss",$nome,$idade,$email,$id) ;
        if($stmt->execute()==TRUE){
            return true ;
        }else{
            return false ;
        }
    }
}
?>
