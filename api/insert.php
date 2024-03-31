<?php

include('../includes/init.php');

$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$number = $_POST['number'];

$query = "INSERT INTO users (name, password, address, number) VALUES (?, ?, ?, ?)";
$params = [$name, $password, $address, $number];

$statement = $connection->prepare($query);
$data = $statement->execute($params);

echo $data;
