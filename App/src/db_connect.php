<?php
$host = "192.168.20.56";
$dbname = "todo";
$user = "root";
$pass = "";

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo "nice one meht";
} catch (PDOException $e) {
    print "Shits on fire yo: " . "<img src='http://cdn2.image.bored.com/thumbnails/shits-on-fire-yo__big_no.jpeg'>" . $e->getMessage() . "<br/>";
    die();
}
