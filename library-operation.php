<?php

   class OperationDto{
		private $database;
		public function __construct($conexao){
			$this->database = $conexao;
		}


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   //FUNCIONARIOS
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

	   //---------------Cadastrar Funcionários
		public function cadFun($id, $sobrenome, $nome, $titulo, $titulocortesia, $nascimento, $admissao, $endereco, $cidade, $regiao, $cep, $pais, $telefone, $extensao,$notas){
			$sql = "INSERT INTO funcionarios(IDFuncionario,Sobrenome,Nome,Titulo,TituloCortesia,DataNac,DataAdmissao,Endereco,Cidade,Regiao,Cep,Pais,TelefoneResidencial,Extensao,Notas) VALUES ('$id','$sobrenome','$nome','$titulo','$titulocortesia','$nascimento','$admissao','$endereco','$cidade','$regiao','$cep','$pais','$telefone','$extensao','$notas')";
			return mysqli_query($this->database->getConexao(),$sql);
		}
	   

	   //---------------Buscar Funcionários
	   	   function lookingFun($id){
			   $sql = "SELECT * FROM funcionarios WHERE IDFuncionario = '{$id}'";
			   $resultado = mysqli_query($this->database->getConexao(),$sql);
			   return mysqli_fetch_assoc($resultado);
		   }
	   
	   
	   	//---------------Atualizar Funcionários
			function UpdtFun($id, $sobrenome, $nome, $titulo, $titulocortesia, $nascimento, $admissao, $endereco, $cidade, $regiao, $cep, $pais, $telefone,$extensao,$notas){
			  $sql = "UPDATE funcionarios SET Sobrenome='{$sobrenome}', Nome='{$nome}', Titulo='{$titulo}', TituloCortesia='{$titulocortesia}', DataNac='{$nascimento}', DataAdmissao='{$admissao}', Endereco='{$endereco}', Cidade='{$cidade}', Regiao='{$regiao}', Cep='{$cep}', Pais='{$pais}', TelefoneResidencial='{$telefone}', Extensao='{$extensao}', Notas='{$notas}'  WHERE   IDFuncionario={$id} ";
			  return mysqli_query($this->database->getConexao(), $sql);
			}


	   //---------------Listar Funcionários
			function listaFun() {
				$funcionarios = array();
				$resultado = mysqli_query($this->database->getConexao(), "SELECT * FROM funcionarios");
				while ($funcionario = mysqli_fetch_assoc($resultado)) {
					array_push($funcionarios, $funcionario);
				}
				return $funcionarios;	
			}
	   

	   //---------------Remover Funcionários
	   	function remFun($id) {
			$sql = "DELETE FROM `funcionarios` WHERE `funcionarios`.`IDFuncionario` = {$id}";
			mysqli_query($this->database->getConexao(), $sql);
		}
	   
   

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   //REGIÂO
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
				
	   //---------------Cadastrar Regiões
			function cadReg($idreg,$descreg){
				$sql = "INSERT INTO regiao(IDRegiao, DescricaoRegiao ) VALUES ('$idreg','$descreg')";
				return mysqli_query($this->database->getConexao(),$sql);
			}


	   //---------------Listar Regiões
			function listaReg() {
				$regioes = array();
				$resultado = mysqli_query($this->database->getConexao(), "SELECT * FROM regiao");
				while ($regiao = mysqli_fetch_assoc($resultado)) {
					array_push($regioes, $regiao);
				}
				return $regioes;
			}
	   

	   	//---------------Buscar Regiões
	   	   function lookingReg($id){
			   $sql = "SELECT * FROM regiao WHERE IDRegiao = '{$id}'";
			   $resultado = mysqli_query($this->database->getConexao(),$sql);
			   return mysqli_fetch_assoc($resultado); 
			}
			   
	   
	   	//---------------Atualizar Regiões
	   		function UpdtReg($id, $nome){
				$sql = "UPDATE regiao SET DescricaoRegiao='{$nome}' WHERE IDRegiao = {$id}";
				return mysqli_query($this->database->getConexao(), $sql);
			}
	   
		//---------------Remover Regiões
		function remReg($id) {
			$sql = "DELETE FROM `regiao` WHERE `regiao`.`IDRegiao` = {$id}";
			mysqli_query($this->database->getConexao(), $sql);
		}
	   

		
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   //FUNCIONÁRIOS TERRITÓRIOS
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   
	   //---------------Listar Funcionários Territórios
			function listaFunTer() {
				$funcionarios = array();
				$sql = "SELECT * FROM funcionarios_territorios tb
								  INNER JOIN territorios t ON tb.IDTerritorio = t.IDTerritorio
								  INNER JOIN funcionarios f ON tb.IDFuncionario = f.IDFuncionario ";
				$resultado = mysqli_query($this->database->getConexao(),$sql);
				while ($funcionario = mysqli_fetch_assoc($resultado)) {
					array_push($funcionarios, $funcionario);
				}
				return $funcionarios;	
			}

			//---------------inserir Funcionários Territórios
			function inserirFunTer($idfun, $idter) {
				$sql = "INSERT INTO funcionarios_territorios(IDFuncionario,IDTerritorio) VALUES('$idfun','$idter')";
				return mysqli_query($this->conexao,$sql);
			}
	   


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   // TERRITÓRIOS
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	   //---------------Cadastrar Territórios
	   		function cadTer($id,$desc,$reg){
				$sql = "INSERT INTO territorios(IDTerritorio, DescricaoTerritorio, IDRegiao ) VALUES ('$id','$desc','$reg')";
				return mysqli_query($this->database->getConexao(),$sql);
			}
	   
	   
	   //---------------Listar Territórios
	   		public function listaTer() {
				$territorios = array();	
				$sql = "SELECT * FROM territorios";
				$resultado = mysqli_query($this->database->getConexao(), $sql);	
				while ($territorio = mysqli_fetch_assoc($resultado)) {
					array_push($territorios, $territorio);
				}	
				return $territorios;
			}


	   	//---------------Atualizar Territórios
			function UpdtTer($id, $desc, $reg){	
				$sql = "UPDATE territorios SET DescricaoTerritorio = '{$desc}', IDRegiao='{$reg}' WHERE IDTerritorio = {$id}";
				return mysqli_query($this->database->getConexao(), $sql);	
			}


		//---------------Remover Territórios
			function remTer($id) {
				$sql = "DELETE FROM `territorios` WHERE `territorios`.`IDTerritorio` = {$id}";
				mysqli_query($this->database->getConexao(), $sql);
			}		

	   
	   	//---------------Buscar Territórios
		   function lookingTer($id){
				$sql = "SELECT * FROM territorios WHERE IDTerritorio = '{$id}'";
				$resultado = mysqli_query($this->database->getConexao(),$sql);
				return mysqli_fetch_assoc($resultado);
			}
	}   
?>
