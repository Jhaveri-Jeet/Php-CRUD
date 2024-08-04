<?php

header("Content-Type: application/json");

require '../includes/connection.php';

$query = "SELECT * FROM `Users`";

$statement = $connection->prepare($query);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

if ($users != null)
    echo json_encode(['success' => true, 'users' => $users]);
else
    echo json_encode(['success' => false]);
