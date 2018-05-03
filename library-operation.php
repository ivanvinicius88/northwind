<?php

   class OperationDto{

		private $database;

		public function __construct($conexao){

			$this->database = $conexao;
		}
	   
	   
	   
	   
	   
//----------------------------------------------------------
	   //FUNCIONARIOS
//----------------------------------------------------------

	   //---------------Cadastrar Funcionários
		public function cadFun($id, $sobrenome, $nome, $titulo, $titulocortesia, $nascimento, $admissao, $endereco, $cidade, $regiao, $cep, $pais, $telefone, $extensao,$notas){

			$sql = "INSERT INTO funcionarios(IDFuncionario,Sobrenome,Nome,Titulo,TituloCortesia,DataNac,DataAdmissao,Endereco,Cidade,Regiao,Cep,Pais,TelefoneResidencial,Extensao,Notas) VALUES ('$id','$sobrenome','$nome','$titulo','$titulocortesia','$nascimento','$admissao','$endereco','$cidade','$regiao','$cep','$pais','$telefone','$extensao','$notas')";
			return mysqli_query($this->database->getConexao(),$sql);
		}
	   
	   //---------------Buscar Funcionários
	   public function lookingFun($id){
		   $sql = "SELECT * FROM funcionarios WHERE IDFuncionario = '{$id}'";
		   $resultado = mysqli_query($this->database->getConexao(),$sql);
		   return mysqli_fetch_assoc($resultado);
	   }
	   
	   
	   	//---------------Atualizar Funcionários
			function UpdtFun($id, $sobrenome, $nome, $titulo){

			  $sql = "UPDATE funcionarios SET Sobrenome='{$sobrenome}', Nome='{$nome}', Titulo='{$titulo}' WHERE   IDFuncionario={$id} ";
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
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   

//----------------------------------------------------------
	   //REGIÂO
//----------------------------------------------------------
				
	   
	   //---------------Cadastrar Regiões
			function cadReg($idreg,$descreg){
				//cadastar regiões

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

	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
//----------------------------------------------------------
	   //FUNCIONÁRIOS TERRITÓRIOS
//----------------------------------------------------------
	   
	   
	   //---------------Listar Funcionários Territórios
			function listaFunTer() {
				$funcionarios = array();
				$sql = "SELECT * FROM funcionarios_territorios tb
								  INNER JOIN territorios t ON tb.IDTerritorio = t.IDTerritorio
								  INNER JOIN funcionarios f ON tb.IDFuncionario = f.IDFuncionario "; //echo $sql;

				$resultado = mysqli_query($this->database->getConexao(),$sql);

				while ($funcionario = mysqli_fetch_assoc($resultado)) {
					array_push($funcionarios, $funcionario);
				}
				//print_r($funcionarios);
				return $funcionarios;	
			}
	   
	   
	   
	   
	   
	   
	   
//----------------------------------------------------------
	   // TERRITÓRIOS
//----------------------------------------------------------
	   //---------------Cadastrar Territórios
	   
	   
	   
	   
	   
	   
	   
	   
	   //---------------Listar Territórios
	   		function listaTer(){
				$territorios = array();
				$sql = "SELECT * FROM territorios t INNER JOIN regiao r ON t.IDRegiao = r.IDRegiao";
				$resultado = mysqli_query($this->database->getConexao(),$sql);
				while($territorio = mysqli_fetch_assoc($resultado)){
					array($territorios, $territorio);
				}
				return $territorios;
			}
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
      }
