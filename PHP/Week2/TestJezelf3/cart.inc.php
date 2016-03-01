<?php
//sessie aan waar je producten in plaatst
//sessie ==> check productkey in link
//in array (session)
 //h1 aanmaken ==> zijn er producten in array
//foreach ==> loopt over de sessierray
include_once("include_products.php");
if(isset($_GET['productkey'])) {
    $id = $_GET['productkey'];


    if (isset($_SESSION['cart'])) {

        array_push($_SESSION['cart'], $id);
      // var_dump($_SESSION['cart']);
    } else {
        $_SESSION['cart'] = array();
        array_push($_SESSION['cart'], $id);
    }



}

?>
<h1></h1>
<ul>


    <?php
    if (isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $item):?>
    <li><?php echo $productsArray[$item]["beschrijving"].$productsArray[$item]["prijs"]?></li>
     <?php   endforeach;
         }else{
        echo "Cart is empty";
    }?>

</ul>