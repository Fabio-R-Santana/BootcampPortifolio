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

    public function getNameMensagem(){
        return $this->nameMensagem;
    }

    public function getEmailMensagem(){
        return $this->emailMensagem;
    }

    public function getValorMensagem(){
        return $this->valorMensagem;
    }

    public function setNameMensagem($nameMensagem){
        $this->nameMensagem = $nameMensagem;
    }

    public function setEmailMensagem($emailMensagem){
        $this->emailMensagem = $emailMensagem;
    }

    public function setValorMensagem($valorMensagem){
        $this->valorMensagem = $valorMensagem;
    }
    
}

