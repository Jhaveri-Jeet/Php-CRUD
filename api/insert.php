<?php

header("Content-Type: application/json");

require '../includes/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO Users (Username, Password) VALUES (?, ?)";
$params = [$username, $password];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    echo json_encode(['success' => true, 'username' => $username]);
else
    echo json_encode(['success' => false]);
