<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css?<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>

<?php
include("layout.php");
echo " <h1>undersida 1 </h1><br>";
echo "today is ";
echo date('l jS \of F ') . "<br>";
?>

<?php
if (date('j') % 2 == 0) {
    echo 'even date';
} else {
    echo "odd date";
}
?>

</body>
</html>
