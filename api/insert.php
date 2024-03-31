<?php

include('../includes/init.php');

$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$number = $_POST['number'];

$query = "INSERT INTO users (name, password, address, number) VALUES ('$name', '$password', '$address', '$number')";
$connection->exec($query);

header('Location: index.php');
