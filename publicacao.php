<?php
interface Publicacao {
    public function Abrir();
    public function Fechar();
    public function Folhear($p);
    public function avancarpag();
    public function voltarpag();
}