<?php

namespace Entities;

class Mensagem{

    private $nameMensagem;
    private $emailMensagem;
    private $valorMensagem;

    public function __construct($nameMensagem,$emailMensagem,$valorMensagem){
        $this->nameMensagem =$nameMensagem;
        $this->emailMensagem = $emailMensagem;
        $this->valorMensagem = $valorMensagem;
    
    }

    public function get_nameMensagem(){
        return $this->nameMensagem;
    }

    public function get_emailMensagem(){
        return $this->emailMensagem;
    }

    public function get_valorMensagem(){
        return $this->valorMensagem;
    }

    public function set_nameMensagem($nameMensagem){
        $this->nameMensagem = $nameMensagem;
    }

    public function set_emailMensagem($emailMensagem){
        $this->emailMensagem = $emailMensagem;
    }

    public function set_valorMensagem($valorMensagem){
        $this->valorMensagem = $valorMensagem;
    }
    
}

?>