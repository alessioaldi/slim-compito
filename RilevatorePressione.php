<?php
    include_once "Misurazione.php";
    class RilevatorePressione implements JsonSerializable{
        protected $id;
        protected $misurazioni;
        protected $tipologia;

        function __construct($id, $tipologia){
            $this->id=$id;
            $this->posizione=$posizione;
            $this->tipologia=$tipologia;
            $this->misurazioni=[
                new Misurazione("17/02/2024", "50", "bar", 83, "cs1"),
                new Misurazione("18/02/2024", "11", "bar", 75, "cs2"),
                new Misurazione("19/02/2024", "19", "bar", 29, "cs3"),
            ];
        }

        public function jsonSerialize() {
            $a = [
                "id"=>$this->id,
                "tipologia"=>$this->tipologia
            ];
            return $a;
        }

        function getId(){
            return $this->id;
        }

        function getMis(){
            return $this->misurazioni;
        }
    }