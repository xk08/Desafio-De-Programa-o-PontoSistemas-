<!-- 
    Desenvolvido por Marcos Martins - 
    Getters And Setters
    -->
<?php
require_once("banco.php");

class Cadastro extends Banco {
    private $nome;
    private $idade;
    private $email;

    //Funções de Set para as variáveis
    public function setNome($string){
        $this->nome = $string;
    }
    public function setIdade($string){ 
        $this->idade = $string;
    }
    
    public function setEmail($string){
        $this->email = $string;
    }
 
    //Funções de Get para as variáveis
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getEmail(){
        return $this->email;
    }

    public function incluir(){
        return $this->setUsuario($this->getNome(),$this->getIdade(),$this->getEmail());
    }
}
?>
