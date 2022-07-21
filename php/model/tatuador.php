<?php

class Tatuador {

    public $first_name;
    public $last_name;
    public $cidade;
    public $estado;
    public $genero;
    public $email;
    public $senha;
    public $experiencia;
    public $especialidade;
    public $instagram;

    public function __construct($first_name, $last_name, $cidade, $estado, $genero, 
    $email, $senha, $experiencia, $especialidade, $instagram) {

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->genero = $genero;
        $this->email = $email;
        $this->senha = $senha;
        $this->experiencia = $experiencia;
        $this->especialidade = $especialidade;
        $this->instagram = $instagram;
    }

    public function getFirstName()
    { 
        return $this->first_name; 
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }


    public function getLastName()
    { 
        return $this->last_name; 
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getCidade()
    { 
        return $this->cidade; 
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }


    public function getEstado()
    { 
        return $this->estado; 
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getGenero()
    { 
        return $this->genero; 
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }


    public function getEmail()
    { 
        return $this->email; 
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getSenha()
    { 
        return $this->senha; 
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getExperiencia()
    { 
        return $this->experiencia; 
    }

    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;
    }

    public function getEspecialidade()
    { 
        return $this->especialidade; 
    }

    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    public function getInstagram()
    { 
        return $this->instagram; 
    }

    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    }

}

?>
