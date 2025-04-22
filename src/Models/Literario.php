<?php

class Literario extends Livro {
    private string $genero;
    
    public function __construct(string $titulo,string $autor, )
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
    }


}