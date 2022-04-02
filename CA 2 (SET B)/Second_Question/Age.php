<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>AGE VALIDATE</title>
    
  </head>
  <body>
    <form action="calculator.php" method="post">
      Age: <input type="number"  name="age"> <br>
      <input type="submit">
    </form>
    <?php
    $age = $_POST["age"];
// Variable to check

// Min age
$min = 26;
// Max age
$max = 56;

if (filter_var($age, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Age is not valid");
} else {
  echo("Age is valid");
}

    
    ?>
  </body>
</html>


