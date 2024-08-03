<?php

require '../includes/connection.php';

$id = $_POST['id'];

$query = "DELETE FROM Users WHERE id = ?";
$params = [$id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    echo "Successfully Deleted !";
else
    echo "Something went wrong";
