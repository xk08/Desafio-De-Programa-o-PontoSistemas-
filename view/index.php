<!-- 
    Desenvolvido por Marcos Martins
    -->
<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
    <?php include("botaoListar.php") ?>

<form method="post" action="../controller/ControllerCadastro.php" id="form" name="form" onsubmit="validar(document.form); return false;" class="col-10">
  <div class="container">
    <h1>Cadastro de usuário</h1>
    <p>Informe alguns dados sobre você</p>

    <hr>

    <label for="nome"><b>Nome</b></label>
    <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required autofocus>

    <label for="nome"><b>Idade</b></label>
    <input class="form-control" type="number" id="idade" name="idade" placeholder="Idade" required>

    <br>
    <label for="email"><b>E-mail</b></label>
    <input class="form-control" type="email" id="email" name="email" placeholder="E-mail" required>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar Usuário</button>
    </div>
  </div>

</form>

</html>
