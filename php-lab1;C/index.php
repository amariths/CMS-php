<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$txt = "Hello world!";
$x = 5;
echo $txt;
$x = 5;
?>

<?php
$cars = array("Volvo", "BMW", "Toyota");
foreach($cars as $car) {
    echo $car;
}

?>

</body>
</html>
