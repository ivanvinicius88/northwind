<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("library-operation.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);


    $id = $_POST['IDFuncionario'];
    $funcionario = $OperationDto->lookingFunTer($id);

?>

<div class="container">
<hr>
  <h1 class="my-4 ">Atualizar Funcionário Território</h1>
  <form method="POST" action="regiao-update.php">
    <div class="form-row">
      <div class="form-group mx-3  my-4 col-md-4">
        <label for="fun">ID Funcionario</label>
        <input value="<?=$funcionario['IDFuncionario']?>" name="idfuncionario" type="text" class="form-control"  id="fun" >
        </div>
      <div class="form-group mx-3  my-4 col-md-4">
        <label for="ter">ID Território</label>
        <input value="<?=$funcionario['IDTerritorio']?>" name="idterritorio" type="text" class="form-control" id="ter"  >
      </div>
    </div>
    <div class="form-row">
      <button type="submit" class="my-4 mx-3 btn btn-primary">Atualizar</button>
      <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>
	  </div>	
  </form>
  <hr>
</div>