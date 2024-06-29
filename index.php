<?php
require 'Animal.php';
require 'Chat.php';//ordre important

$bob = new Animal('bob',4);
$bob->crier();
echo "\n";
$merlin = new Animal('merlin',5);
echo $merlin->nom;
echo "\n";
echo Animal::$nombre;
$bob->changerNom('bob1');
echo "\n","" . $bob->nom;
$bob->setCode();
echo "\n","" . $bob->getCode();

$chat1 = new Chat('chat1',4);
$chat1->crier();