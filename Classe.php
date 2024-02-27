<?php
include_once 'Alunno.php';

class Classe {
    public $nome;
    public $lista_alunni;

    function __construct() {
        $this->nome = "5^DIA";
        $this->lista_alunni = [
            new Alunno("Anatolie", "Pavlov", 20), 
            new Alunno("Riccardo", "Grandi", 19),     
            new Alunno("Alessio", "Didilescu", 18), 
            new Alunno("Alessandro", "Gonzales", 19), 
            new Alunno("Matteo", "Falli", 18), 
            new Alunno("Swaran", "Singh", 20), 
        ];
    
    }

    public function stampaClasse() {
        $s = "";
        foreach ($this->lista_alunni as $alunno) {
           $s .= $alunno->stampaAlunno();
           $s .= "<br>";
        }
        return $s;
    }

}

?>