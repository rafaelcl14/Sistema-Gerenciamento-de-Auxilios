<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of servidor
 *
 * @author mathe
 */
class servidor {
    
    private $nome;
    private $siape;
    private $nvAcesso;
    
    public function __construct($nome,$siape,$nvAcesso) {
        $this->nome = $nome;
        $this->siape = $siape;
        $this->nvAcesso = $nvAcesso;
    }
    
    function getNome() {
        return $this->nome;
    }
    

    function getSiape() {
        return $this->siape;
    }

    function getNvAcesso() {
        return $this->nvAcesso;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSiape($siape) {
        $this->siape = $siape;
    }

    function setNvAcesso($nvAcesso) {
        $this->nvAcesso = $nvAcesso;
    }   
}
