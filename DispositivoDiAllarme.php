<?php
    class DispositivoDiAllarme implements JsonSerializable{
        protected $id;
        protected $tel;

        function __construct($id, $tel){
            $this->id=$id;
            $this->tel=$tel;
        }

        function getId(){
            return $this->id;
        }

        function jsonSerialize() {
            $a = [
                "id"=>$this->id,
                "tel"=>$this->tel
            ];
            return $a;
        }
    }