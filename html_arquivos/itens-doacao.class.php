<?php
    class ItensDoacao{
        private $nome;
        private $desc;
        private $qtdd;
        private $unidade;
        private $status;


        public function __construct($nome, $desc, $qtdd, $unidade, $status){
            $this->nome = $nome;
            $this->email = $desc;
            $this->senha = $qtdd;
            $this->senha = $unidade;
            $this->senha = $status;
            echo "<br />Pronto!";
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function inserirItem()
        {
            $conexao = mysqli_connect("localhost","root","", "circulo");
            if(!$conexao){
                die("Falha na conexão com o BD");
            }
            //echo "Conectado com o banco";
            $sql = "INSERT INTO itensdoacao (nome, descricao, quantidade, unidade, status) VALUES ('$this->nome', '$this->email', '$this->senha')";
            if(mysqli_query($conexao, $sql)){
                
            }else{
                echo "Erro: ".mysqli_error($conexao);
            }
            mysqli_close($conexao);
        }
        
    }