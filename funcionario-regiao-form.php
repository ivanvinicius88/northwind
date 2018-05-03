<?php
include_once("cabecalho.php");
include_once("conexao.php");

?>


<h1 class="my-4 ">Cadastrar Funcionário</h1>

<form method="get" action="funcionario-cadastra.php">

  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-4">
      <label for="inputEmail4">Funcionário ID</label>
      <input name="idfuncionario" type="text" class="form-control" id="inputEmail4" placeholder="">
    </div>

    <div class="form-group my-4 mx-3 col-md-4">
      <label for="inputPassword4"> Território ID</label>
      <input name="idterritorio" type="text" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>



     <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
     <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>

  </form>
