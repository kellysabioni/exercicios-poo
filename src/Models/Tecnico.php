<?php

class Tecnico extends Livro {
    private Formato $formato;
    
    public function __construct(string $titulo,string $autor, Formato $formato)
    {
        parent::__construct($titulo,$autor);

        $this->setFormato(Formato::DIGITAL);
    }

    private function setFormato(Formato $formato): void {
        $this->formato = $formato;
    }

    public function getFormato(){
        return $this->formato;
    }
}