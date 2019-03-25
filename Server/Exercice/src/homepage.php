<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 01/03/2019
 * Time: 14:59
 */


$db = 'tagbesill';
$host = '127.0.0.1';
$username = 'root';
$pswd = '';

try{
    $connection = new PDO("mysql:dbname=$db;host->$host", $username, $pswd);

} catch(\PDOException $exception) {
    print_r('[ERROR] %s Impossible connection to the DB %s');
    print_r($exception);
}

$articles = $connection->query('SELECT * FROM article');

/*
echo "<br>" . $articles->rowCount() . "<br><br>";


print_r($articles->fetch());
echo "<br><br><br>";
print_r($articles->fetch(PDO::FETCH_ASSOC));
*/
$AllArticles = $articles->fetchAll();

?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Our new Blog</title>
    </head>
    <body>

<?php

foreach ($AllArticles as $article) {

    ?>
    <h2 style="text-align:center;"><?php echo ($article["title"]) ?></h2>
    <img src="<?php echo ($article["img"])?>" alt="Logo" style="display:block; margin: 0 auto;"/>
    <p style="text-align:inherit;"><?php echo ($article["description"]) ?></p>
    <p style="text-align:center;">Published at: <?php echo ($article["pub_date"]) ?></p>
    <?php
}



?>

<?php
$newArticles = $connection->query("SELECT * FROM article WHERE title = 'Trello'");

foreach ($newArticles as $newArticle) {
    echo "<br><br> Here is only the Trello Article: <br>";
    echo $newArticle["title"];
    echo "<br><br>";
    echo $newArticle["description"];
}

?>

</body>
</html>
