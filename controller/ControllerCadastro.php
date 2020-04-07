<!-- 
    Desenvolvido por Marcos Martins
    -->
<?php
require_once("../model/cadastroUsuario.php");
class cadastroController{

    private $cadastro;

    public function __construct(){
        $this->cadastro = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setIdade($_POST['idade']);
        $this->cadastro->setEmail($_POST['email']);

        $result = $this->cadastro->incluir();
        if($result >= 1){
            echo "<script>alert('O Usuário foi incluído com sucesso!');document.location='../view/listar.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar o usuário!, verifique se o NOME não está duplicado !!');history.back()</script>";
        }
    }
}
new cadastroController();
