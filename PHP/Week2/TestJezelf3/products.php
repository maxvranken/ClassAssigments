<?php

include_once("include_products.php");

?>

<?php foreach($productsArray as $value => $product): ?>
    <h1><?php echo $product['beschrijving'] . " " . $product['prijs'] ?></h1>
    <img src="<?php echo $product['foto'] ?>" alt="">
    <a href="/PcLink/Oefeningen/Week2/TestJezelf3/detail.php?product=<?php echo $value ?>"> Meer info</a>
    <?php endforeach; ?>
<?php foreach($productsArray as $products => $value) {

    echo "<li>";
    // echo "<p>";
    echo "Product: ";
    echo $value['beschrijving'];
    echo $value['prijs'];
    //  echo "<p>";
    echo "<li>";

}

?>

