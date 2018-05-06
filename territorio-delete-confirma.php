<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");



 $conexao = new BancoDeDados('localhost', 'root', '', 'northwind');
 $OperationDto = new OperationDto($conexao);

  $id = $_POST["IDTerritorio"];
  $territorio = $OperationDto->lookingTer($id);

 ?>



	<form action="territorio-delete.php" method="post">
      <input type="hidden" name="IDTerritorio" value="<?=$territorio['IDTerritorio']?>">
        <div class="container">
			<div class="alert alert-danger" role="alert">
				Você Tem Certeza Que Deseja Remover Esse Território?
			</div>
			<table class="table table-striped table-bordered ">
        			<tr>
                        <td>ID</td>
						<td>Nome</td>
						<td>Ação</td>
					</tr>
					<tr>
						<td><?=$territorio['IDTerritorio']?></td>
						<td><?=$territorio['DescricaoTerritorio']?></td>
						<td><button class="btn btn-danger">Remover</button></td>
					</tr>
			</table>
		</div>
     </form>
