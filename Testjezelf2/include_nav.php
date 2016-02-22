<?php $scriptname = $_SERVER['SCRIPT_NAME'];
$home = 0;
$contact = 0;
/*$homepath = 'xampp/htdocs/Les1/Testjezelf2/home.php';
$contactpath = 'xampp/htdocs/Les1/Testjezelf2/contact.php';*/
if($scriptname == "xampp/htdocs/Les1/Testjezelf2/home.php" ){
    $home = 1;
} elseif($scriptname == "xampp/htdocs/Les1/Testjezelf2/contact.php"){
    $contact = 1;
}?>

<nav>
    <ul>
        <li <?php if ($home == 1) {
            echo "class = 'active' ";
        } ?>><a href="home.php">Home</a></li>
        <li <?php if ($contact == 1) {
            echo "class = 'active' ";
        } ?>><a href="contact.php">Contact</a></li>

    </ul>
</nav>
<?php echo $_SERVER['SCRIPT_NAME']; ?>
