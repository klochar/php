<?php
$notes = [
    "prenom" => "Jean",
    "notes" => [
        "Maths" => 15,
        "Francais" => 12,
        "Histoire" => 9,
        "Geographie" => 17,
        "Anglais" => 14,
    ],
];
echo $notes['prenom']." a eu les notes suivantes : ";
echo "\n";
foreach ($notes['notes'] as $matiere => $note) {
    echo $matiere . " : " . $note . "\n";
}
// print_r($notes['notes']);
?>