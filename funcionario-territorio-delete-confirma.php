<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

 $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
 $OperationDto = new OperationDto($conexao);

  $id = $_POST["IDFuncionario"];
  $funcionario = $OperationDto->lookingFunTer($id);

 ?>

	<form action="funcionario-territorio-delete.php" method="post">
      <input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>">
        <div class="container">
			<div class="alert alert-danger" role="alert">
				Você Tem Certeza Que Deseja Remover Esse Funcionário Território?
			</div>
			<table class="table table-striped table-bordered ">
        			<tr>
						<td>ID Funcionário</td>
						<td>ID Território</td>
						<td>Ação</td>
					</tr>
					<tr>
						<td><?=$funcionario['IDFuncionario']?></td>
						<td><?=$funcionario['IDTerritorio']?></td>
						<td><button class="btn btn-danger">Remover</button></td>
					</tr>
			</table>
		</div>
     </form>