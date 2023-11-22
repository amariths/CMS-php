<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$dbhost = "db";
$dbuser = "root";
$dbpass = "";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass);
if ($mysqli) {
   printf("connected success");
}


echo "hi";
?>

</body>
</html>
