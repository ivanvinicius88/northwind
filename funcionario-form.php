<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

$conexao = new BancoDeDados("localhost","root","","northwind");
$OperationDto = new OperationDto($conexao);
?>


<div class="container">
  <h1 class="my-4 ">Cadastrar Funcionários</h1>

  <form method="POST" action="funcionario-cadastra.php">

    <div class="form-row">
      <div class="form-group my-4 mx-3 col-md-1">
        <label for="idfuncionario">ID</label>
        <input name="id" type="text" class="form-control" id="idfuncionario" placeholder="ID" maxlength="4" >
      </div>
      
      <div class="form-group my-4 mx-3 col-md-4">
        <label for="sobrenome">Sobrenome</label>
        <input name="sobrenome" type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" >
      </div>
      
      <div class="form-group mx-3  my-4 col-md-4">
        <label for="nome">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome Completo" maxlength="10">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group mx-3 my-4 col-md-4">
		  <label for="titulo">Título</label>
		  <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Ex: Vendedor" >
      </div>
      
      <div class="form-group mx-3  my-4 col-md-2">
		  <label for="titulocortesia">Título de Cortesia</label>
		  <input name="titulocortesia" type="text" class="form-control" id="titulocortesia" placeholder="Mr." maxlength="3" >
      </div>
      
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="datanascimento">Nascimento</label>
		  <input name="nascimento" type="date" class="form-control" id="datanascimento" >
      </div>
    </div>

    <div class="form-row">
      <div class="form-group mx-3  my-4 col-md-3">
		  <label for="dataadmissao">Data de Admissão</label>
		  <input name="admissao" type="date" class="form-control" id="dataadmissao" >
      </div>
      
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="endereco">Endereço</label>
		  <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Endereço" >
      </div>
      
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="cidade">Cidade</label>
		  <input name="cidade" type="text" class="form-control" id="cidade" placeholder="Cidade" >
      </div>
    </div>
   
    <div class="form-row">
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
     
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="cep">CEP</label>
		  <input name="cep" type="text" class="form-control" id="cep" placeholder="Ex: 190000000">
      </div>
      
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="pais">Pais</label>
		  <input name="pais" type="text" class="form-control" id="pais" placeholder="Ex: Brazil">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group mx-3  my-4 col-md-3">
		  <label for="telefone">Telefone</label>
		  <input name="telefone" type="tel" class="form-control" id="telefone" placeholder="Ex: 47999900902" >
      </div>
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="extensao">Extensão</label>
		  <input name="extensao" type="text" class="form-control" id="extensao" placeholder="Ex: 9653" maxlength="4" >
      </div>
      <div class="form-group mx-3 my-4 col-md-3">
		  <label for="notas">Notas</label>
		  <input name="notas" type="text" class="form-control" id="notas" placeholder="Ex: Gradueted" >
      </div>
    </div>

   <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>


  </form>
</div>
