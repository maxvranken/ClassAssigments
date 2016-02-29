<?php

$WorkToDo = [
    ['beschrijving' => 'Werk aan project 2','uren werk' => 2,'categorie' => 'School'],
    ['beschrijving' => 'Gaan zwemmen','uren werk' => 0.5,'categorie' => 'Sport'],
    ['beschrijving' => 'Missie doen op csgo','uren werk' => 2,'categorie' => 'Ontspanning'],
    ['beschrijving' => 'Werk aan php','uren werk' => 6,'categorie' => 'School'],
    ['beschrijving' => 'Auto wassen','uren werk' => 2,'categorie' => 'Thuis'],
];


?>
<?php
foreach($WorkToDo as $toDo => $value){
    echo "<li ";
    if($value['uren werk'] < 1){
        echo "class='groen'>";
    } elseif($value['uren werk'] > 5){
        echo "class='rood'>";
    }else echo "class='oranje'>";

    echo "<h1>"; echo $value['beschrijving']; echo "</h1>";
    echo "<p>"; echo 'uren: '; echo $value['uren werk']; echo "</p>";
    echo "<p>"; echo 'categorie: '; echo $value['categorie']; echo "</p>";
    echo "<hr>"; echo "</hr>";
}
?>
