<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>
</head>

<body>
    <form action="./api/insert.php" method="post">
        <input type="text" id="username" />
        <input type="text" id="password" />
        <input type="button" value="Submit" onclick="insertData()"/>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        function insertData() {

            let data = {
                username: $('#username').val(),
                password: $('#password').val(),
            }

            $.ajax({
                url: "./api/insert.php",
                type: "POST",
                data: data,
                success: function(response) {
                    console.log(response.success);
                },
                error: function(e) {
                    console.log(e);
                }
            });
        }
    </script>
</body>

</html>