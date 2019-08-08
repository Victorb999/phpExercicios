<?php
    Class Estacionamento{
        private $idEstacionamento;
        private $descricaoEstacionamento;        
        private $valorhora;

        public function __construct($id, $descricao,$valorhora)
        {
            $this->idEstacionamento = $id;
            $this->descricaoEstacionamento = $descricao;            
            $this->valorhora = $valorhora;
        }
        function get($campo){
			return $this->$campo;
		}			
		function set($campo,$valor){
			$this->$campo = $valor;
        }
        
    }

    Class Vaga extends Estacionamento
    {
        private $idVaga;
        private $descricaoVaga;
        private $status;        

        public function __Construct($estacionamento,$idVaga,$descricaoVaga,$status)
		{
			parent::__Construct($estacionamento->get("idEstacionamento"),$estacionamento->get("descricaoEstacionamento"),$estacionamento->get("valorhora"));
            $this->idVaga = $idVaga;
            $this->descricaoVaga = $descricaoVaga;
            $this->status = $status;
		}
        function getV($campo){
			return $this->$campo;
		}			
		function setV($campo,$valor){
			$this->$campo = $valor;
        }
        
    }

?>