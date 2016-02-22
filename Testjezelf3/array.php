<?php $toDoArray = array(
    array('beschrijving' => 'Werk aan project 2',
        'uren werk' => 2,
        'categorie' => 'School', ),
    array('beschrijving' => 'Gaan zwemmen',
        'uren werk' => 1.5,
        'categorie' => 'Sport', ),
    array('beschrijving' => 'Missie doen op csgo',
        'uren werk' => 2,
        'categorie' => 'Ontspanning', ),
    array('beschrijving' => 'Werk aan php',
        'uren werk' => 6,
        'categorie' => 'School', ),
    array('beschrijving' => 'Auto wassen',
        'uren werk' => 2,
        'categorie' => 'Thuis', ),
); ?>
<?php
$i = 0;
foreach($toDoArray as $toDo => $value){
    echo "<li ";
    if($value['uren werk'] > 5){
        echo "class='rood'>";
    } elseif($value['uren werk'] > 1){
        echo "class='oranje'>";
    }else echo "class='groen'>";

    echo "<p>"; echo $value['beschrijving']; echo "</p>";
    echo "<p>"; echo $value['uren werk']; echo "</p>";
    echo "<p>"; echo $value['categorie']; echo "</p>";
    echo "<hr>"; echo "</hr>";
}
?>
