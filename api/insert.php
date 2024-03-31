<?php

include('../includes/init.php');

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO users (name, password, username, email) VALUES (?, ?, ?, ?)";
$params = [$name, $password, $username, $email];

$statement = $connection->prepare($query);
$data = $statement->execute($params);

echo $data;
