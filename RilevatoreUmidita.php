<?php
    include_once "Misurazione.php";
    class RilevatoreUmidita implements JsonSerializable{
        protected $id;
        protected $misurazioni;
        protected $posizione;

        function __construct($id, $posizione){
            $this->id=$id;
            $this->posizione=$posizione;
            $this->misurazioni=[
                new Misurazione("16/02/2024", "22", "%", 85, "csu1"),
                new Misurazione("17/02/2024", "15", "%", 77, "csu2"),
                new Misurazione("18/02/2024", "23", "%", 28, "csu3"),
            ];
        }

        function getId(){
            return $this->id;
        }

        public function jsonSerialize() {
            $a = [
                "id"=>$this->id,
                "posizione"=>$this->posizione
            ];
            return $a;
        }

        function getMis(){
            return $this->misurazioni;
        }
    }
