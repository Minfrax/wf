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
    <img src="./storage/icon_intellinote.png" alt="Logo">
    <img src='<?php echo $article['img']; ?>' />

    <h2><?php echo ($article["title"]) ?></h2>
    <img src="<?php echo ($article["img"])?>" alt="Logo"/>
    <p><?php echo ($article["description"]) ?></p>
    <p>Published at: <?php echo ($article["pub_date"]) ?></p>
    <?php
}

?>

