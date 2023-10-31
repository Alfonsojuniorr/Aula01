<?php
require_once 'pessoa.php';
require_once 'publicacao.php';
class Livro implements Publicacao {
    private $Titulo;
    private $Autor;
    private $totPaginas;
    private $pagAtual;
    private $Aberto;
    private $Leitor;

    public function Detalhes() {
      echo "<hr> Livro " . $this->Titulo . " escrito por " . $this->Autor;
      echo "<br> Páginas: ". $this->totPaginas . " atual " . $this->pagAtual;
      echo "<br> Sendo lido por ".$this->Leitor->getnome();
    }
    function __construct($Titulo, $Autor, $totPaginas, $Leitor){
        $this->Titulo = $Titulo;
        $this->Autor = $Autor;
        $this->totPaginas = $totPaginas;
        $this->Aberto = false;
        $this->pagAtual = 0;
        $this->Leitor = $Leitor;
    }
    function getTitulo() {
        return $this->Titulo;
    }
    function getAutor() {
        return $this->Autor;
    }
    function getTotPaginas() {
        return $this->totPaginas;
    }
    function getpagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->Aberto;
    }
    function getLeitor() {
        return $this->Leitor;
    }
    function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }
    function setAutor($Autor) {
        $this->Autor = $Autor;
    }
    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    function setpagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    function setAberto($Aberto) {
        $this->Aberto = $Aberto;
    }
    function setLeitor($Leitor) {
        $this->Leitor = $Leitor;
    } 
    public function Abrir(){
      $this->Aberto = true;
    }
    public function Fechar() {
       $this->Aberto = false;
    }
    public function Folhear($p) {
       if($p>$this->totPaginas) {
        $this->pagAtual = 0;
       } else {
        $this->pagAtual = $p;
       }
    }
    public function avancarpag() {
       $this->pagAtual ++;
    }
    public function voltarpag() {
       $this->pagAtual --;
    }


    
        
    
}


