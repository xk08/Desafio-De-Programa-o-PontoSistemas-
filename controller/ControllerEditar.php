<!-- 
    Desenvolvido por Marcos Martins
    -->
<?php
require_once("../model/banco.php") ;

class editarController {

    private $editar ;
    private $nome ;
    private $idade ;
    private $email ;

    public function __construct($id){
        $this->editar = new Banco() ;
        $this->criarFormulario($id) ;
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaUsuario($id) ;
        $this->nome         =$row['nome'] ;
        $this->idade        =$row['idade'] ;
        $this->email        =$row['email'] ;
    }
    public function editarFormulario($nome,$idade,$email,$id){
        if($this->editar->updateUsuario($nome,$idade,$email,$id) == TRUE){
            echo "<script>alert('O usuário foi editado com sucesso!');document.location='../view/listar.php'</script>";
        }else{
            echo "<script>alert('Erro ao edital o usuário !! ');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getEmail(){
        return $this->email;
    }
}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['idade'],$_POST['email'],$_POST['id']);
}
?>
