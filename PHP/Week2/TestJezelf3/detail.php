<?php
include_once ('include_products.php');

$productsArray[$_GET['product']];

session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Testjezelf3</title>
</head>
<body>

<form action="" method="post">
    <h1><?php echo $productsArray[$_GET['product']]['beschrijving']?></h1>
    <h2><?php echo $productsArray[$_GET['product']]['prijs']?></h2>
    <img src="<?php echo $productsArray[$_GET['product']]['foto']; ?>"/>
    <input hidden="hidden" type="text" name="productkey" value="<?php echo $_GET['product']; ?>">
    <button type="submit" value="" >Buy now </button>





</form>



</body>
</html>




