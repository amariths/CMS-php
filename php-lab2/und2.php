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
echo " <h1>undersida 2 </h1>";

$num = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
  }
?>



<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="number" name="num">
<input type="submit" name="submit" value="Submit">
</form>


<table>
<tr>
<td>Value</td>
<td>Multiplication</td>
</tr>
<?php
if($num >= 1 && $num <= 9) {
$x = 1;
} else {
    $x = 0;
}
while($x <= $num) {

    echo "<tr>";
  echo "<td> $num*$x </td>";
  echo "<td>" .$num*$x. "</td>";
    echo "</tr>";
  $x++;
}
?>
</table>

</body>
</html>
