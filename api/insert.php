<?php

require '../includes/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO Users (username, password) VALUES (?, ?)";
$params = [$username, $password];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    return Header("Location: ../index.php");
else
    echo "Something went wrong";
