<?php
//classe pai -usuario 
class usuario {
    protected $nome;
    protected $email;

    public function __construct($nome, $email){
        $this->nome =$nome;
        $this->email =$email;
    }
    public function getnome(){
        return $this->nome;
    }
    public function getemail(){
        return $this->email;
    }
    public function exibirinfo(){
        return "nome: {$this->nome} | email: {$this->email}";
    }
}
