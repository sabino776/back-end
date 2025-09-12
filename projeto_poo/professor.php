<?php
require_once "usuario.php";

//classe filha - professor
class professor extends usuario{
    private $disciplina;

    public function __construct($nome, $email, $disciplina){
        parent::__construct($nome, $email);
        $this->disciplina = $disciplina;
    }

    public function getdisciplina(){
        return $this->disciplina;
    }

    public function exibirinfo(){
        return parent::exibirinfo() . "|disciplina: {$this->disciplina}";
    }

    public function daraula(){
        return "{$this->nome} está dando aula de {$this->disciplina}.";
    }
}

