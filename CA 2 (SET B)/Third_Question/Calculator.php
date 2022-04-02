<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>CALCULATOR</title>
    
  </head>
  <body>
    <form action="calculator.php" method="post">
      Name: <input type="text"  name="name"> <br>
      Basic salary: <input type="number" name="pay"><br>
      DA:<input type="number" name="DA"><br>
      <input type="submit">
    </form>
    <?php
    $name = $_POST["name"];
    $basic_pay = $_POST["pay"];
    $DA = $_POST["DA"];


    function calculateSalary($basic_pay, $DA){
       return $basic_pay+$DA;
      }
      
    echo calculateSalary($basic_pay, $DA);

    
    ?>
  </body>
</html>