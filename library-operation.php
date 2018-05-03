<?php

   class OperationDto{

    private $database;

    public function __construct($conexao){

        $this->database = $conexao;
    }


        function cadFun($id, $sobrenome, $nome, $titulo){
            //cadastar funcionários

            $sql = "INSERT INTO funcionarios (IDFuncionario, Sobrenome, Nome, Titulo) VALUES ($id, $sobrenome, $nome, $titulo)";
            return mysqli_query($this->database->getConexao(),$sql);

        }

        function UpdtFun($id, $sobrenome, $nome, $titulo){

          $sql = "UPDATE funcionarios SET Sobrenome='{$sobrenome}', Nome='{$nome}', Titulo='{$titulo}' WHERE   IDFuncionario={$id} ";
          return mysqli_query($this->database->getConexao(), $sql);

        }





        function listaFun() {
            $funcionarios = array();

            $resultado = mysqli_query($this->database->getConexao(), "SELECT * FROM funcionarios");

            while ($funcionario = mysqli_fetch_assoc($resultado)) {
                array_push($funcionarios, $funcionario);
            }

            return $funcionarios;
        }


            /*---------------------------------------------------------------------------------------------------------------------*/

        function cadReg($idreg,$descreg){
            //cadastar regiões

            $sql = "INSERT INTO regiao(IDRegiao, DescricaoRegiao ) VALUES ('$idreg','$descreg')";
            return mysqli_query($this->database->getConexao(),$sql);

        }




        function listaReg() {
            $regioes = array();

            $resultado = mysqli_query($this->database->getConexao(), "SELECT * FROM regiao");

            while ($regiao = mysqli_fetch_assoc($resultado)) {
                array_push($regioes, $regiao);
            }

            return $regioes;
        }


        /*---------------------------------------------------------------------------------------------------------------------*/
        function listaFunReg() {
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

      }
