<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
echo"hi";
$mysqli = new mysqli("db","root","password", "mysql");
if ($mysqli->connect_error) {
    echo "Connection failed: ";
  }
  echo "Connected successfully";


// Close connection
$conn->close();
?>

</body>
</html>
