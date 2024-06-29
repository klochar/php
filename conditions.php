<?php
$notes = (int)readline("Entrez une note : ");//(int) permet de forcer la conversion en entier
//switch case meme que les autre lang
if($notes >= 15){//=== compare la valeur et le type
    echo "superieur ou egale a 15";
} else {//elseif / || &&
    echo "moins que 15";
}

?>