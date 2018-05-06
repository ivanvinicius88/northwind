<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

$conexao = new BancoDeDados("localhost","root","","northwind");
$OperationDto = new OperationDto($conexao);
?>


<div class="container">
  <h1 class="my-4 ">Cadastrar Territórios</h1>

  <form method="POST" action="territorio-cadastra.php">

    <div class="form-row">
      <div class="form-group my-4 mx-3 col-md-1">
        <label for="idterritorio">ID</label>
        <input name="id" type="text" class="form-control" id="idterritorio" placeholder="ID" maxlength="4" >
      </div>
      
      <div class="form-group my-4 mx-3 col-md-4">
        <label for="nome">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" >
      </div>
       <div class="form-group mx-3 my-4 col-md-3">
		 <label for="regiao">Regiao</label>
		 <select name="regiao" id="regiao" class="form-control">

			<?php
			   	$regioes = $OperationDto->listaReg();
				foreach ($regioes as $regiao) :
			  ?>

			<option value="<?=$regiao["IDRegiao"]?>"><?=$regiao["DescricaoRegiao"]?></option>

			<?php
			  endforeach
			  ?>

		 </select>
   	  </div>
     </div>
     <div class="form-row">
        <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
   		<button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>
	 </div>

  </form>
</div>