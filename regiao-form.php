<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);



?>

<h1 class="my-4 ">Cadastrar Região</h1>

<form method="get" action="regiao-cadastra.php">
 
  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-4">
      <label for="inputEmail4">Região ID</label>
      <input name="idreg" type="text" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    
    <div class="form-group my-4 mx-3 col-md-4">
      <label for="inputPassword4">Descrição da Região</label>
      <input name="descreg" type="text" class="form-control" id="inputPassword4" placeholder="Sobreome">
    </div>
  </div>
  
  
   <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>
   
</form>




