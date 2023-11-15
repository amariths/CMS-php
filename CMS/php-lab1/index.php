<!DOCTYPE html>
<html>
<body>

<?php
$title = "My first PHP page"

?>

<h1> <?php echo $title ?> </h1>

<?php
$txt = "Hello world! <br>";
$x = 1;
echo $txt;
echo $x . "<br>" . "<br>";
?>


<ul>

<?php
$x = 1;
while($x <= 5) { ?>
   <li> <?php echo "The number is: $x <br>"; ?></li>
   <?php $x++;
  }
?>

</ul>


<?php
$cars = array("Volvo", "BMW", "Toyota");

foreach($cars as $car) {
    echo "car: " . $car . "<br>";
}

?>

<?php
function func() { ?>
    <h1> <?php echo "<br> this is function";?> </h1
    <?php
}
?>
<?php
func();
?>



</body>
</html>
