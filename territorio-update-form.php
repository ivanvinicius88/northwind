<?php
    include_once("cabecalho.php");
    include_once("conexao.php");
    include_once("library-operation.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);

    $id = $_POST['IDTerritorio'];
    $territorio = $OperationDto->lookingTer($id);

?>

<div class="container">
<hr>
  <h1 class="my-4 ">Atualizar Território</h1>
  <form method="POST" action="territorio-update.php">
    <div class="form-row">
      <input value="<?=$territorio['IDTerritorio']?>" name="id" type="hidden" class="form-control" id="IDRegiao">
      <div class="form-group mx-3  my-4 col-md-4">
        <label for="nome">Nome</label>
        <input value="<?=$territorio['DescricaoTerritorio']?>" name="desc" type="text" class="form-control" id="nome" placeholder="Região" >
      </div>

      <div class="form-group mx-3 my-4 col-md-3">
          <label for="regiao">Regiao</label>
          <select name="reg" id="regiao" class="form-control">
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
      <button type="submit" class="my-4 mx-3 btn btn-primary">Atualizar</button>
      <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>
	  </div>	
  </form>
  <hr>
</div>

