<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD</title>
</head>

<body>
    <form>
        <input type="text" id="name" placeholder="Enter Name: " autofocus>
        <input type="password" id="password" placeholder="Enter Password: ">
        <input type="text" id="address" placeholder="Enter Address: ">
        <input type="number" id="number" placeholder="Enter Number: ">
        <input type="button" value="Submit" onclick="sendData()">
    </form>

    <script src="./js/jquery.min.js"></script>
    <script>
        function sendData() {
            $.ajax({
                url: './api/insert.php',
                type: 'POST',
                data: {
                    name: $('#name').val(),
                    password: $('#password').val(),
                    address: $('#address').val(),
                    number: $('#number').val()
                },
                success: function(data) {
                    alert(data);
                }
            });
        }
    </script>
</body>

</html>