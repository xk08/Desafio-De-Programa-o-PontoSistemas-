<!-- 
    Desenvolvido por Marcos Martins
    -->
<?php
require_once("../model/banco.php") ;
class deleta {
    private $deleta ;

    public function __construct($id){
        $this->deleta = new Banco() ;
        if($this->deleta->deleteUsuario($id)== TRUE){
            echo "<script>alert('O usuário foi deletado com sucesso!');document.location='../view/listar.php'</script>";
        }else{
            echo "<script>alert('Erro ao deletar o usuário !!');history.back()</script>" ;
        }
    }
}
new deleta($_GET['id']) ;
?>
