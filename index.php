<?php
// des abonnés
$ids = [234, 345];

$tableau = [
    ["nom" => "Jean", "age" => 25, "id" => 123],
    ["nom" => "Max", "age" => 35, "id" => 234],
    ["nom" => "Julie", "age" => 45, "id" => 345],
];

$resultat = array_filter($tableau, function($element){
    global $ids;
    return in_array($element["id"], $ids);
});

print_r($resultat);
?>