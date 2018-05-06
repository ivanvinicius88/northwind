<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");



 $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
 $OperationDto = new OperationDto($conexao);

  $id = $_POST["IDRegiao"];
  $regiao = $OperationDto->lookingReg($id);

 ?>



	<form action="regiao-delete.php" method="post">
      <input type="hidden" name="IDRegiao" value="<?=$regiao['IDRegiao']?>">
        <div class="container">
			<div class="alert alert-danger" role="alert">
				Você Tem Certeza Que Deseja Remover Essa Região?
			</div>
			<table class="table table-striped table-bordered ">
        			<tr>
                        <td>ID</td>
						<td>Nome</td>
						<td>Ação</td>
					</tr>
					<tr>
						<td><?=$regiao['IDRegiao']?></td>
						<td><?=$regiao['DescricaoRegiao']?></td>
						<td><button class="btn btn-danger">Remover</button></td>
					</tr>
			</table>
		</div>
     </form>
