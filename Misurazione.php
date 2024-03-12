<?php
    class Misurazione implements JsonSerializable{
        protected $data;
        protected $valore;
        protected $unitaDiMisura;
        protected $sogliaDiAllarme;
        protected $codiceSeriale;

        function __construct($data, $valore, $misura, $soglia, $cod){
            $this->data=$data;
            $this->valore=$valore;
            $this->unitaDiMisura=$misura;
            $this->sogliaDiAllarme=$soglia;
            $this->codiceSeriale=$cod;
        }

        public function jsonSerialize() {
            $a = [
                "data"=>$this->$data,
                "valore"=>$this->$valore,
                "unitaDiMisura"=>$this->$unitaDiMisura,
                "sogliaDiAllarme"=>$this->$sogliaDiAllarme,
                "codiceSeriale"=>$this->codiceSeriale
            ];
            return $a;
        }
    }