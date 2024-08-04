<?php

require '../includes/connection.php';
$id = $_GET['id'];

$query = "SELECT * FROM Users WHERE Id = ?";
$params = [$id];

$statement = $connection->prepare($query);
$statement->execute($params);
$user = $statement->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>

<body>
    <form>
        <input type="hidden" id="id" value="<?= $user['Id'] ?>" />
        <input type="text" id="username" value="<?= $user['Username'] ?>" autofocus />
        <input type="text" id="password" value="<?= $user['Password'] ?>" />
        <input type="button" value="Submit" onclick="updateData()" />
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function updateData() {

            let data = {
                id: $('#id').val(),
                username: $('#username').val(),
                password: $('#password').val(),
            }

            $.ajax({
                url: "../api/update.php",
                type: "POST",
                data: data,
                success: function(response) {
                    if(response.success != true)
                        alert("Something went wrong");
                    else    
                        window.location.href = "../index.php";
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }
    </script>
</body>

</html>