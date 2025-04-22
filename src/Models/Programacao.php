<?php 
final class Programacao extends Tecnico {
    
    private string $linguagem;
    
    public function __construct(string $titulo, string $autor, Formato $formato, string $linguagem)
    {

        parent::__construct($titulo, $autor, $formato);

        $this->setLinguagem($linguagem);
    }
    
    private function setLinguagem($linguagem){
        $this->linguagem = $linguagem;
    }

    public function getLinguagem(){
        return $this->linguagem;
    }

}