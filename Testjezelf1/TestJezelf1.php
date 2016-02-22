<?php $spots = [
[
"picture" => "http://www.friendofafarmer.com/brooklyn_files/small_24779.jpg",
"name" => "Theresa W.",
    "name" => "Theresa W.",
    "location" => "East River Park",
    "city" => "Brooklyn, NY"
],
[
"picture" => "https://upload.wikimedia.org/wikipedia/commons/c/cc/LonderzeelDiepensteyn.JPG",
    "name" => "Vincent T.",
    "location" => "Istabul",
    "city" => "Turkije"
],
[
"picture" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Station_Londerzeel.jpg/266px-Station_Londerzeel.jpg",
    "name" => "Roeben p.",
    "location" => "Station Londerzeel",
    "city" => "Londerzeel"
],

[
"picture" => "http://www.turnpaard.be/sites/default/files/field/image/blog_post/background.jpg",
    "name" => "Max V.",
    "location" => "Creative Gym",
    "city" => "Mechelen"
]
];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test jezelf 1</title>
<link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>
<?php include_once ("nav.inc.php"); ?>
<section class="timeline">
    <?php foreach( $spots as $spot ): ?>
        <article>
            <div>
                <img src="<?php echo $spot['picture'] ?>" alt="<?php echo $post['name'] ?>">
            </div>

            <div>
                <h3><?php echo $spot['name'] ?></h3>
                <h4><?php echo $spot['location'] ?></h4>
                <div><?php echo $spot['city'] ?></div>
            </div>

        </article>
        <hr>
    <?php endforeach; ?>
</section>
<footer> </footer>
</body>
</html>
