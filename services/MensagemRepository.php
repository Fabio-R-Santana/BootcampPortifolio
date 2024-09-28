<?php

namespace Services;

class MensagemRepository{

    private $pdo;
    
    public function __construct(){
        
    }

    public function enviarMensagem($objetoMensagem){
        $objetoMensagem -> GetnameMensagem();
    }

}

