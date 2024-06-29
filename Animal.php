<?php

class Animal{
    public $nom;
    public $age;
    public static $nombre = 0;
    private $code;

    public function __construct($nom,$age){
        $this->nom = $nom;
        $this->age = $age;
        self::$nombre++;
    }

    public function crier(){
        echo 'WAh';
    }

    public function changerNom($nouveauNom){
        $this->nom = $nouveauNom;
    }

    public function setCode(){
        $this->code = rand(1000,9999);
    }
    public function getCode(){
        return $this->code;
    }
}