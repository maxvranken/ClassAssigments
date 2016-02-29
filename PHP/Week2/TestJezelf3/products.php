<?php

include_once("include_products.php");
foreach($productsArray as $products => $value){

    echo "<h1>"; echo $value['beschrijving'] ; echo $value['prijs']; echo "</h1>";
    echo '<img src="' . $value['foto'] . '" width="200" height="194">';
    echo '<a href="' . $value['info']; echo'">Meer info'; echo "</a>";
    echo "<hr>"; echo "</hr>";

}
foreach($productsArray as $products => $value) {

    echo "<li>";
    // echo "<p>";
    echo "Product: ";
    echo $value['beschrijving'];
    echo $value['prijs'];
    //  echo "<p>";
    echo "<li>";

}

?>

