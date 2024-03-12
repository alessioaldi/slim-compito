<?php
    include_once "DispositivoDiAllarme.php";
    include_once "RilevatorePressione.php";
    include_once "RilevatoreUmidita.php";
    class Impianto implements JsonSerializable{
        protected $nome;
        protected $lat;
        protected $log;
        protected $dispositiviAllarme;
        protected $rilevatoriPressione;
        protected $rilevatoriUmidita;

        function __construct(){
            $this->nome="ecorp";
            $this->lat="24.13.53";
            $this->log="94.5.23";
            $this->dispositiviAllarme=[
                new DispositivoDiAllarme("1","3393846056"),
                new DispositivoDiAllarme("2","3334646056"),
                new DispositivoDiAllarme("4","3393841352")
            ];
            $this->rilevatoriPressione=[
                new RilevatorePressione("1","gas"),
                new RilevatorePressione("2","liquido"),
                new RilevatorePressione("3","gas")
            ];
            $this->rilevatoriUmidita=[
                new RilevatoreUmidita("1","soffitto"),
                new RilevatoreUmidita("2","terra"),
                new RilevatoreUmidita("3","soffitto")
            ];

        }

        //ritorna tutti gli allarmi
        function getAllarmi(){
            return $this->dispositiviAllarme;
        }

        //ritorna tutti i riv di pressione
        function getRilevatoriPressione(){
            return $this->rilevatoriPressione;
        }

        //ritorna i riv umidita
        function getRilevatoriUmidita(){
            return $this->rilevatoriUmidita;
        }

        function searchAllarme($id){
            foreach($this->dispositiviAllarme as $allarme){
                if($allarme->getId()==$id){

                    return $allarme;
                }
            }
            return 0;
        }

        function searchRilevatorePressione($id){
            foreach($this->rilevatoriPressione as $pres){
                if($pres->getId()==$id){

                    return $pres;
                }
            }
            return 0;
        }

        function searchRilevatoreUmidita($id){
            foreach($this->rilevatoriUmidita as $um){
                if($um->getId()==$id){

                    return $um;
                }
            }
            return 0;
        }

        

        public function jsonSerialize() {
            $a = [
                "nome"=>$this->nome,
                "latitudine"=>$this->lat,
                "longitudine"=>$this->log,
            ];
            return $a;
        }
    }