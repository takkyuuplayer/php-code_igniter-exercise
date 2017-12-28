<?php

$dbh = new \PDO('mysql:host=mysql;dbname=tutorial;charset=utf8', 'root', '');
$stmt = $dbh->prepare('SELECT * FROM news');
$stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);

var_dump($rows);
