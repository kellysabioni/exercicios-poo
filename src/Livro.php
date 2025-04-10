<?php

class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas;

    public function setTitulo (string $titulo):void{
        $this->titulo = $titulo;
    }
    public function setAutor (string $autor):void{
        $this->autor = $autor;
    }
    public function setPaginas (int $paginas):void{
        $this->paginas = $paginas;
    }

    public function getTitulo () {
        return $this->titulo;
    }
    public function getAutor () {
        return $this->autor;
    }
    public function getPaginas () {
        return $this->paginas;
    }
}