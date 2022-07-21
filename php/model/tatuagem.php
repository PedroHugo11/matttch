<?php

class Usuario {

    private $matricula;
    private $nome;
    private $evento;
    private $data;
    private $mes;
    private $ano;

    public function __construct($matricula, $nome, $evento, $data, $mes, $ano) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->evento = $evento;
        $this->data = $data;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function getMatricula()
    { 
        return $this->matricula; 
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }


    public function getNome()
    { 
        return $this->nome; 
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    public function getEvento()
    { 
        return $this->evento; 
    }

    public function setEvento($evento)
    {
        $this->evento = $evento;
    }

    public function getData()
    { 
        return $this->data; 
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getMes()
    { 
        return $this->mes; 
    }

    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    public function getAno()
    { 
        return $this->ano; 
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

}

?>
