<?php

function afficher($texte) {
    echo $texte;
}

afficher("salut");
echo "\n";
function somme($a,$b){
    return $a+$b;
}

$maVariable = somme(5,6);
echo $maVariable;
echo "\n";
var_dump($maVariable);
echo "\n";

$userInput = readline("entrer mot :");
$userInput = strtolower($userInput);
if($userInput === strrev($userInput)){
    echo "c'est un palindrome";
}else{
    echo "ce n'est pas un palindrome";
}

?>