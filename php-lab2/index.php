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
echo "<h1>Home</h1>";
?>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
}

?>


 <?php
    $time = date("H");

    $timezone = date("e");

    $hi = array("good morning ", "good afternoon ", "good evening ", "goodnight ");

    if ($time < "12") {
        ?>
        <h1>
        <?php echo $hi[0];
        echo $name;
        ?>
    </h1>
    <?php
    } else
    if ($time >= "12" && $time < "17") {
        echo $hi[1];
        echo $name;
    } else
    if ($time >= "17" && $time < "19") {
        echo $hi[2];
        echo $name;
    } else
    if ($time >= "19") {
        echo  $hi[3];
        echo $name;
    }
    ?>




<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>




</body>
</html>
