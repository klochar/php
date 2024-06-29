<?php
$notes = null;

while ($notes === null) {
    $notes = readline("Entrez une note : ");
    if ($notes >= 15) {
        echo "superieur ou egale a 15\n";
    } else {
        echo "moins que 15\n";
    }
}

for ($i=0;$i<$notes;$i++){
    echo $i." ";
}
echo "\n";

$tab=[1,2,3,4,5];
foreach ($tab as $element){
    echo $element.' ';
}
?>