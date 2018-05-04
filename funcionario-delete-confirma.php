<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");



 $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
 $OperationDto = new OperationDto($conexao);

  $id = $_POST["IDFuncionario"];
  $funcionario = $OperationDto->lookingFun($id);

 ?>



	<form action="funcionario-delete.php" method="post">
      <input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>">
        <div class="container">
			<div class="alert alert-danger" role="alert">
				Você Tem Certeza Que Deseja Remover Esse Funcionário?
			</div>
			<table class="table table-striped table-bordered ">
        			<tr>
						<td>Nome</td>
						<td>Sobrenome</td>
						<td>Título</td>
						<td>Ação</td>
					</tr>
					<tr>
						<td><?=$funcionario['Nome']?></td>
						<td><?=$funcionario['Sobrenome']?></td>
						<td><?=$funcionario['Titulo']?></td>
						<td><button class="btn btn-danger">Remover</button></td>
					</tr>
			</table>
		</div>
     </form>