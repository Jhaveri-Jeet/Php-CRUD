<?php

header("Content-Type: application/json");

require '../includes/connection.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE Users SET Username = ?, Password = ? WHERE Id = ?";
$params = [$username, $password, $id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    echo json_encode(['success' => true]);
else
    echo json_encode(['success' => false]);
