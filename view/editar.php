<!-- 
    Desenvolvido por Marcos Martins
    -->
<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>

<body>
    <?php include("botaoListar.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
    <form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
    <div class="container">
    <h1>Cadastro de usuário</h1>
    <p>Informe alguns dados sobre você para prosseguir.</p>

    <hr>

    <label for="nome"><b>Nome</b></label>
    <input class="form-control" type="text" id="nome" name="nome"value="<?php echo $editar->getNome(); ?>" required autofocus>

    <label for="nome"><b>Idade</b></label>
    <input class="form-control" type="number" id="idade" name="idade" value="<?php echo $editar->getIdade(); ?>" required>

    <br>
    <label for="email"><b>E-mail</b></label>
    <input class="form-control" type="email" id="email" name="email" value="<?php echo $editar->getEmail(); ?>" required>
    <br>

  </div>
        <div class="form-group container">
            <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
            <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
        </div>
        </form>
   </div>
    
</body>

</html>
