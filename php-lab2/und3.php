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
echo " <h1>undersida 3 </h1>";
$num = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"];
  }
?>


<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<input type="number" name="num">
<input type="submit" name="submit" value="Submit">
</form>

<?php
$kr = 0.176;

echo $kr * $num;

?>



</body>
</html>
