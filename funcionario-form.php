<?php
include_once("cabecalho.php");
include_once("conexao.php");

?>


<h1 class="my-4 ">Cadastrar Funcionário</h1>

<form method="get" action="funcionario-cadastra.php">

  <div class="form-row">
    <div class="form-group my-4 mx-3 col-md-4">
      <label for="inputEmail4">Funcionário ID</label>
      <input name="idfuncionario" type="text" class="form-control" id="inputEmail4" placeholder="ID">
    </div>

    <div class="form-group my-4 mx-3 col-md-4">
      <label for="inputPassword4">Sobrenome</label>
      <input name="sobrenome" type="text" class="form-control" id="inputPassword4" placeholder="Sobreome">
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group mx-3  my-4 col-md-4">
		<label for="inputAddress">Nome</label>
		<input name="nome" type="text" class="form-control" id="inputAddress" placeholder="Nome">
	  </div>

	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress2">Título</label>
		<input name="titulo" type="text" class="form-control" id="inputAddress2" placeholder="Título">
	  </div>
  </div>

    <!--
    <div class="form-row">
    <div class="form-group mx-3 my-4 col-md-4">
      <label for="inputEmail4">Título Cortesia</label>
      <input name="cortesia" type="text" class="form-control" id="inputEmail4" placeholder="Cortesia">
    </div>

    <div class="form-group mx-3  my-4 col-md-4">
      <label for="inputPassword4">Data de Nascimento</label>
      <input name="nascimento" type="date" class="form-control" id="inputPassword4" value="0000-00-00">
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress">Data de Admissão</label>
		<input name="admissao" type="date"  class="form-control" id="inputAddress" value="0000-00-00">
	  </div>

	  <div class="form-group my-4 col-md-4">
		<label for="inputAddress2">Endereço</label>
		<input name="endereco" type="text" class="form-control" id="inputAddress2" placeholder="Rua">
	  </div>
  </div>

    <div class="form-row">
		<div class="form-group mx-3 my-4 col-md-4">
		  <label for="inputEmail4">Cidade</label>
		  <input name="cidade" type="text" class="form-control" id="inputEmail4" placeholder="Cidade">
		</div>

		<div class="form-group mx-3 my-4 col-md-2">
		  <label for="inputState">Região</label>
		  <select name="regiao" id="inputState" class="form-control">

			<?php
			  // $sql = "SELECT * from regiao";
				//$query = mysqli_query($conexao, $sql);
			  //while($linha = mysqli_fetch_array($query)){
			  ?>

			<option><//?=$linha["DescricaoRegiao"]?></option>

			<?php
			  //}
			  ?>

		  </select>
		</div>
    </div>

  <div class="form-row">
	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress">CEP</label>
		<input name="cep" type="text" class="form-control" id="inputAddress" placeholder="00000-000">
	  </div>

	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress2">País</label>
		<input name="pais" type="text" class="form-control" id="inputAddress2" placeholder="Brasil">
	  </div>
  </div>
    <div class="form-row">
    <div class="form-group mx-3 my-4 col-md-4">
      <label for="inputEmail4">Telefone Residencial</label>
      <input name="telefoneresidencial" type="text" class="form-control" id="inputEmail4" placeholder="(47) 0 0000-0000">
    </div>

    <div class="form-group mx-3 my-4 col-md-4">
      <label for="inputPassword4">Extensão</label>
      <input name="extensao" type="text" class="form-control" id="inputPassword4" placeholder="Extensão">
    </div>
  </div>

  <div class="form-row">
	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress">Foto</label>
		<input name="foto" type="file" class="form-control" id="inputAddress" placeholder="Foto">
	  </div>

	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress2">Notas</label>
		<input name="notas" type="text" class="form-control" id="inputAddress2" placeholder="Notas">
	  </div>
  </div>

 <div class="form-row">
   <div class="form-group mx-3 my-4 col-md-4">
      <label for="inputPassword4">Reportase</label>
      <input name="reportase" type="text" class="form-control" id="inputPassword4" placeholder="Reportase">
    </div>



	  <div class="form-group mx-3 my-4 col-md-4">
		<label for="inputAddress">Foto Caminho</label>
		<input name="fotocaminho" type="text" class="form-control" id="inputAddress" placeholder="https//:www.caminho.com">
	  </div>
</div>

  -->




   <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
   <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>

</form>
